<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Models\Player;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Admin\AdminUser;

class PlayerController extends Controller
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
            $data = Player::latest()->get();

            return DataTables::of($data)->addColumn('action', function ($data)
            {
                $edit = route('admin.players.edit', $data->id);
                $show = route('admin.players.show', $data->id);
                $delete = route('admin.players.destroy', $data->id);
                $button = '';
                $button = '<a name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm" href="' . $edit . '">Edit</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<a name="show"  id="' . $data->id . '_show" class="edit btn btn-success btn-sm" href="' . $show . '">View</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" class="delete btn btn-danger btn-sm" onclick="deleteData(this)" data-id="' . $data->id . '" data-url="' . $delete . '">Delete</button>';

                return $button;
            })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.players.index');
        }catch (\Exception $e) {
            dd($e);
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
            return view('admin.players.addoredit');
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
    public function store(Request $request)
    {
        try{
            $data = $request->except(['_token']);
            if($request->hasFile('image')){
                $file = $request->file('image');
                $data['image']=uploadImage($file,'users/image');
            }
            $user = Player::create($data);

            $extra['redirect'] = back()->getTargetUrl();

            if($user){
                return redirect('admin/players')->with('success',"Player submit successfully");
            }else{
                return redirect()->back()->with('error',"Error Found");
            }
        }catch (\Exception $e) {
            dd($e);
            return redirect()->back()->with('errors',$e->getMessage());
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
            $players=Player::find($id);
            return view('admin.players.show',compact('players'));
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
            $user = Player::find($id);
            return view('admin.players.addoredit',compact('user'));
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
            $user = Player::where('id', $id)->update($data);
            $extra['redirect'] = back()->getTargetUrl();

            if($user){
                return redirect('admin/players')->with('success',"Player updated successfully");
            }else{
                return redirect()->back()->with('error',"Error found");
            }
        }catch (\Exception $e) {
            dd($e);
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
            $cat = Player::find($id);
            if($cat->delete()){
                return 1;
            }else{
                return 0;

            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error',$e->getMessage());
        }
    }

}
