<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Gear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Admin\AdminGear;

class GearsController extends Controller
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
            $data = Gear::latest()->get();

            return DataTables::of($data)->addColumn('action', function ($data)
            {
                $edit = route('admin.gears.edit', $data->id);
                $show = route('admin.gears.show', $data->id);
                $delete = route('admin.gears.destroy', $data->id);
                $button = '';
                $button = '<a name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm" href="' . $edit . '">Edit</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<a name="show"  id="' . $data->id . '_show" class="edit btn btn-success btn-sm" href="' . $show . '">View</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" class="delete btn btn-danger btn-sm" onclick="deleteData(this)" data-id="' . $data->id . '" data-url="' . $delete . '">Delete</button>';

                return $button;
            })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.gears.index');
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
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
            return view('admin.gears.addoredit');
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
    public function store(AdminGear $request)
    {
        try{
            $data = $request->except(['_token']);

            if($request->hasFile('image')){
                $file = $request->file('image');
                $data['image']=uploadImage($file,'users/image');
            }
            $gear = Gear::create($data);

            $extra['redirect'] = back()->getTargetUrl();

            if($gear){
                return redirect('admin/gears')->with('success',"Gear submit successfully");
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
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function show(Gear $gear)
    {
        try{
            $gearslist=Gear::find($gear->id);
            return view('admin.gears.show',compact('gearslist'));
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $gear = Gear::find($id);
            return view('admin.gears.addoredit',compact('gear'));
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gear  $gear
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
            $gear = Gear::where('id', $id)->update($data);
            $extra['redirect'] = back()->getTargetUrl();

            if($gear){
                return redirect('admin/gears')->with('success',"Gear updated successfully"); 
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
     * @param  \App\Models\Gear  $gear
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $cat = Gear::find($id);
            if($cat->delete()){
                return 1;
            }else{
                return 0;

            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }
    public function viewprofile($id){
        return view('admin.gears.viewprofile');
    }
}
