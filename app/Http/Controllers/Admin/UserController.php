<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Organization;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Admin\AdminUser;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
        if ($request->ajax())
        {
            $data = User::latest()->get();

            return DataTables::of($data)->addColumn('action', function ($data)
            {
                $edit = route('admin.users.edit', $data->id);
                $show = route('admin.users.show', $data->id);
                $delete = route('admin.users.destroy', $data->id);
                $orgs = route('admin.users.orgList', $data->id);

                $button = '<a name="edit" id="' . $data->id . '" class="edit btn btn-warning btn-sm" href="' . $orgs . '">Organizations</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<a name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm" href="' . $edit . '">Edit</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<a name="show"  id="' . $data->id . '_show" class="edit btn btn-success btn-sm" href="' . $show . '">Show</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" class="delete btn btn-danger btn-sm" onclick="deleteData(this)" data-id="' . $data->id . '" data-url="' . $delete . '">Delete</button>';

                return $button;

            })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.users.index');
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function orgList(Request $request,$id)
    {
        try{

                $data = Organization::where('user_id',$id)->latest()->get();

                return DataTables::of($data)->addColumn('action', function ($data)
                {
                    $edit = route('admin.users.edit', $data->id);
                    $show = route('admin.users.show', $data->id);
                    $delete = route('admin.users.destroy', $data->id);

                    $button = '<a name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm" href="' . $edit . '">Edit</a>';
                    $button .= '&nbsp;&nbsp;&nbsp;<a name="show"  id="' . $data->id . '_show" class="edit btn btn-success btn-sm" href="' . $show . '">Show</a>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" class="delete btn btn-danger btn-sm" onclick="deleteData(this)" data-id="' . $data->id . '" data-url="' . $delete . '">Delete</button>';

                    return '';

                })
                ->addColumn('logo', function ($data) {
                    return '<img src="'.url('storage/'.$data->logo).'" />';
                })
                ->rawColumns(['action','logo'])
                    ->make(true);

        }catch (\Exception $e) {
          dd($e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try{
            return view('admin.users.addoredit');
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminUser $request)
    {
        try{
            $data = $request->except(['_token']);
            if($request->hasFile('image')){
                $file = $request->file('image');
                $data['image'] = uploadImage($file,'users/image');
            }

            if(isset($request->password)){
                $data['password'] = Hash::make($request->password);
            }
            $user = User::create($data);

            $extra['redirect'] = back()->getTargetUrl();

            if($user){
                return redirect('admin/users')->with('success',"User submit successfully");
            }else{
                return redirect()->back()->with('error',"Error Found");
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        try{
            return view('admin.users.show',compact('user'));
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
        try{
            $user = User::find($id);
            return view('admin.users.addoredit',compact('user'));
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        try{
            $data = $request->except(['_token','_method','role_id']);

            if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image']=uploadImage($file,'users/image');
            }
            $user = User::where('id', $id)->update($data);
            $extra['redirect'] = back()->getTargetUrl();

            if($user){
                return redirect('admin/users')->with('success',"User updated successfully");
            }else{
                return redirect()->back()->with('error',"Error found");
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
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
        try{
            $cat = User::find($id);
            if($cat->delete()){
                return 1;
            }else{
                return 0;

            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    public function logout () {
        //logout user
        auth()->logout();
        // redirect to homepage
        return redirect()->route('login');
    }
}
