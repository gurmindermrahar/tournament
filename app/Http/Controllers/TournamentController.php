<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournaments;
use App\Models\User;
use App\Models\CreditFee;
use App\Models\TournamentJoined;
use App\Models\TournamentMatch;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Frontend\JoinTournamentRequest;
use App\Http\Requests\Frontend\createTournamentRequest;
class TournamentController extends Controller
{

    public function addTournament(Request $request)
    {
        return view('frontend.add_tournament');
    }

    public function addTournamentPost(createTournamentRequest $request)
    {
        $data = $request->except(['_token','start_date']);

        if(isset($request->start_time)){
            $data['start_time'] = $request->start_date .' '.$request->start_time;
        }

        $tournament = Tournaments::create($data);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Created Successfully',
            'redirect' => ''
        ]);
    }


    public function editTournament(Request $request,$id)
    {
        $tournament = Tournaments::find($id);
        //dd($tournament);
        return view('frontend.edit_tournament',compact('tournament'));
    }

    public function getTournamentRulesDetails($id)
    {
        $id = enDeCryptString($id,'decrypt');
        $tournament = Tournaments::findOrFail($id);
        $user = Auth::user();
        return view('frontend.tournament-rules',compact('tournament','user'));
    }


    public function joinTournament(JoinTournamentRequest $request,$id)
    {
        $tournament = Tournaments::findOrFail($id);
        $user = Auth::user();
        $data = [
            'agree_rules' => $request->agree_rules,
            'team_id' => $request->team_id,
            'user_id' => $user->id,
            'tournament_id' => $tournament->id,
        ];
        TournamentJoined::updateOrCreate(['user_id' => $user->id],$data);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Joined Successfully',
            'redirect' => route('getTournamentDetails',$id)
        ]);
    }


    public function reportDashboard($id)
    {
        $id = enDeCryptString($id,'decrypt');
        $tournament = Tournaments::findOrFail($id);
        $match = TournamentMatch::find(1);
        $user = Auth::user();
        $chatwith = User::where('user_role',1)->first();

        return view('frontend.report_board',compact('tournament','match','user','chatwith'));
    }


}
?>
