<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tournaments;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;
use App\Http\Requests\Admin\Tournament;

class TournamentController extends Controller
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
            $data = Tournaments::where('match_type','tournament')->latest()->get();

            return DataTables::of($data)->addColumn('action', function ($data)
            {
                $edit = route('admin.tournaments.edit', $data->id);
                $show = route('admin.tournaments.show', $data->id);
                $delete = route('admin.tournaments.destroy', $data->id);
                $button = '';
                $button = '<a name="edit" id="' . $data->id . '" class="edit btn btn-primary btn-sm" href="' . $edit . '">Edit</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<a name="show"  id="' . $data->id . '_show" class="edit btn btn-success btn-sm" href="' . $show . '">View</a>';
                $button .= '&nbsp;&nbsp;&nbsp;<button type="button" class="delete btn btn-danger btn-sm" onclick="deleteData(this)" data-id="' . $data->id . '" data-url="' . $delete . '">Delete</button>';

                return $button;
            })->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.tournaments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tournaments.addoredit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Tournament $request)
    {

        $data = $request->except(['_token']);

        // if($request->hasFile('image')){
        //   $file = $request->file('image');
        //   $data['image']=uploadImage($file,'users/image');
        // }

        if(!empty($data['region'])){
            $data['region'] = implode(",",$data['region']);
        }

        $data['start_time'] = stringToDateTime($data['start_time']);

        $user = Tournaments::create($data);

        $extra['redirect'] = back()->getTargetUrl();

        if($user){
            return redirect('admin/tournaments')->with('success',"Tournament submit successfully");
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
            $tournamentlist=Tournaments::find($id);
            return view('admin.tournaments.show',compact('tournamentlist'));
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
        $user = Tournaments::find($id);
        if($user->region){
            $user->region = explode(',',$user->region);
        }
        return view('admin.tournaments.addoredit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Tournament $request,$id)
    {
        $data = $request->except(['_token','_method','role_id']);

        // if($request->hasFile('image')){
        //   $file = $request->file('image');
        //   $data['image']=uploadImage($file,'users/image');
        // }

        if(!empty($data['region'])){
            $data['region'] = implode(",",$data['region']);
        }

        $data['start_time'] = stringToDateTime($data['start_time']);

        $user = Tournaments::where('id', $id)->update($data);
        $extra['redirect'] = back()->getTargetUrl();

        if($user){
            return redirect('admin/tournaments')->with('success',"Tournament updated successfully");
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
        $cat = Tournaments::find($id);
        if($cat->delete()){
            return 1;
        }else{
            return 0;

        }
    }
}
