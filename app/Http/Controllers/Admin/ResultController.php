<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Result;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Admin\AdminUser;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
        {
            $data = Result::latest()->get();

            return DataTables::of($data)->addColumn('action', function ($data)
            {
                $edit = route('admin.result.edit', $data->id);
                $show = route('admin.result.show', $data->id);
                $delete = route('admin.result.destroy', $data->id);
                $button = '';
                $button = '<a name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm" href="' . $edit . '">Edit</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<a name="show"  id="' . $data->id . '_show" class="edit btn btn-success btn-sm" href="' . $show . '">View</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" class="delete btn btn-danger btn-sm" onclick="deleteData(this)" data-id="' . $data->id . '" data-url="' . $delete . '">Delete</button>';

                return $button;
            })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.result.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.result.addoredit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['_token']);
        // echo"<pre>";print_r($data);die;
        if($request->hasFile('image')){
          $file = $request->file('image');
          $data['image']=uploadImage($file,'users/image');
        }

        $user = Result::create($data);

        $extra['redirect'] = back()->getTargetUrl();

        if($user){
            return redirect('admin/result')->with('success',"User submit successfully");
        }else{
            return redirect()->back()->with('error',"Error Found");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {
        try{
            $result=Result::find($id);
            return view('admin.result.show',compact('result'));
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Result::find($id);
        return view('admin.result.addoredit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUser $request,$id)
    {

        $data = $request->except(['_token','_method','role_id']);

        if($request->hasFile('image')){
          $file = $request->file('image');
          $data['image']=uploadImage($file,'users/image');
        }
        $user = Result::where('id', $id)->update($data);
        $extra['redirect'] = back()->getTargetUrl();
        if($user){
            return redirect('admin/result')->with('success',"User updated successfully");
        }else{
            return redirect()->back()->with('error',"Error Found");
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = Result::find($id);
        if($cat->delete()){
            return 1;
        }else{
            return 0;

        }
    }
}
