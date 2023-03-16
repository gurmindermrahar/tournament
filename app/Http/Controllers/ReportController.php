<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\TournamentMatchImage;
use App\Models\TournamentMatch;

class ReportController extends Controller
{
    public function updloadSreenshort(Request $request)
    {
        $data = $request->except(['_token']);
        $auth = Auth::user();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $data['image'] = uploadImage($file,'users/match/report/'.$request->tournament_id);
        }
        $data['tournament_id'] = $request->tournament_id;
        $data['tournament_match_id'] = $request->tournament_match_id;
        $data['team_id'] = $request->team_id;
        $data['upload_by'] = $auth->id;

        $check = [
            'tournament_match_id' =>$request->tournament_match_id,
            'team_id' => $request->team_id,
        ];

        TournamentMatchImage::updateOrCreate($check,$data);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Uploaded successfully'
        ]);
    }

    public function updateWonTeam(Request $request)
    {
        $data = $request->except(['_token']);
        $auth = Auth::user();
        $match = TournamentMatch::findOrFail($request->match_id);

        $match->won_team = $request->won_team;
        $match->save();

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Updated successfully'
        ]);
    }
}
