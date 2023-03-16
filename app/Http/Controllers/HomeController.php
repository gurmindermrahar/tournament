<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournaments;
use App\Models\User;
use App\Models\CreditFee;
use App\Models\TournamentJoined;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Frontend\JoinTournamentRequest;
use App\Http\Requests\Frontend\NewTeamRequest;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tournaments = Tournaments::where('match_type','tournament')->orderBy('start_time', 'ASC')->limit(6)->get();
        $cashmatches = Tournaments::where('match_type','cash match')->orderBy('start_time', 'ASC')->limit(12)->get();
        return view('frontend.home',compact('tournaments','cashmatches'));
    }

    public function checkUserexist(Request $request)
    {
        $this->validate($request, [
            'username'  => ['string', 'max:255',"unique:users,username"],
        ]);

        return ['status'=>true];
    }

    public function userProfile(Request $request)
    {
        $user = auth()->user();
        $creditplans = CreditFee::all();
        return view('frontend.user-profile',compact('user','creditplans'));
    }

    public function userSettings(Request $request)
    {
        $user = auth()->user();
        return view('frontend.user-settings',compact('user'));
    }

    public function userChangePassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
            'new_password' => 'required',
        ]);


        #Match The Old Password
        if(!Hash::check($request->password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success", "Password changed successfully!");
    }

    public function userChangeSetting(Request $request)
    {
        $user = auth()->user();
        $request->validate([
            'username' => 'required|unique:users,email,'.$user->id,
            'timezone' => 'required',
        ]);

        $user->username = $request->username;
        $user->timezone = $request->timezone;
        if(isset($request->mailing_preferences)){
            $user->mailing_preferences = 1;
        }
        if(isset($request->notification_sounds)){
            $user->notification_sounds = 1;
        }
        $user->save();

        return back()->with("success", "changed successfully!");
    }


    public function getTournaments()
    {
        //$tournaments = Tournaments::where('match_type','tournament')->paginate(15);
       //return view('frontend.tournament-list',compact('tournaments'));
       return view('frontend.games-list');
    }

    public function getGameTournaments($game)
    {
        $game = str_replace('-', ' ', $game);
        $tournaments = Tournaments::where('match_type','tournament')->where('game',$game)->paginate(15);
        return view('frontend.tournament-list',compact('tournaments'));
    }

    public function getCashMatches()
    {
        $matches = Tournaments::where('match_type','cash match')->paginate(15);
        return view('frontend.cashmatches-list',compact('matches'));
    }

    public function getTournamentDetails($id)
    {
        $tournament = Tournaments::find($id);
        return view('frontend.tournament-details',compact('tournament'));
    }

    public function getCashMatchesDetails($id)
    {
        $match = Tournaments::find($id);
        return view('frontend.cashmatch-details',compact('match'));
    }

    public function Brackets(Request $request,$id =null)
    {
        if ($request->ajax())
        {   $result =[];

            $tournament = Tournaments::find($id);
            if($tournament){

                $numOfParticipant = 32;

                $rounds = ceil(log($numOfParticipant)/log(2));

                $bracketSize = pow(2, $rounds);
                $requiredByes = $bracketSize - $numOfParticipant;

                if($numOfParticipant<2)
                {
                    return [];
                }

                $matches = array(array(1,2));
                $sum =0;
                for($round=1; $round<$rounds; $round++)
                {
                    $roundMatches = [];
                    $sum = pow(2, $round + 1) + 1;

                    foreach($matches as $match)
                    {
                        $teamA = $this->changeIntoBye($match[0], $numOfParticipant);
                        $teamB = $this->changeIntoBye($sum - $match[0], $numOfParticipant);
                        $roundMatches[] = array($teamA, $teamB);
                        $teamA = $this->changeIntoBye($sum - $match[1], $numOfParticipant);
                        $teamB = $this->changeIntoBye($match[1], $numOfParticipant);
                        $roundMatches[] = array($teamA, $teamB);
                    }

                    $matches = $roundMatches;
                }
                dd($matches, $bracketSize, $rounds, $numOfParticipant, $sum);
            }

        }else{
            return view('frontend.brackets');
        }
    }

    public function changeIntoBye($seed,  $numOfParticipant)
    {
            return $seed <= $numOfParticipant ?  $seed : null;
    }

    public function CreateNewTeam(NewTeamRequest $request)
    {
        $user = Auth::user();

        $data = [
            'title' => $request->title,
            'slug' => make_slug($request->title,'_'),
            'captain_name' => $request->captain_name,
            'created_by' => $user->id,
        ];
        Team::create($data);

        return response()->json([
            'status' => 'success',
            'code' => 200,
            'message' => 'Created Successfully',
        ]);
    }
}
