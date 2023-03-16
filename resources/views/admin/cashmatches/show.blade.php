@extends('layouts.admin.app')

@section('content')

 <div class="container rounded bg-black mt-5 mb-5">
    <div class="row">
        <div class="col-md-8 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="text-right">Details:</h3>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Start Time</label><br><label class="labels"><b>{{ $tournamentlist->start_time }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Game</label><br><label class="labels"><b>{{ $tournamentlist->game }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Game Mode</label><br><label class="labels"><b>{{ $tournamentlist->game_mode }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Max Teams</label><br><label class="labels"><b>{{ $tournamentlist->max_teams }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Play Per Team</label><br><label class="labels"><b>{{ $tournamentlist->play_per_team }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Max Players</label><br><label class="labels"><b>{{ $tournamentlist->max_players }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Credit Entry</label><br><label class="labels"><b>{{ $tournamentlist->credit_entry }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Platform</label><br><label class="labels"><b>{{ $tournamentlist->platform }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Type</label><br><label class="labels"><b>{{ $tournamentlist->type }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Cash Prize</label><br><label class="labels"><b>{{ $tournamentlist->cash_prize }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Region</label><br><label class="labels"><b>{{ $tournamentlist->region }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Pixel Esports Profile</label><br><label class="labels"><b>{{ $tournamentlist->pixel_esports_profil }}</b></label></div>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <div class="p-3 py-5">
                    <div class="col-md-6"><label class="labels">Date</label><br><label class="labels"><b>{{ $tournamentlist->date }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Teams</label><br><label class="labels"><b>{{ $tournamentlist->teams }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Status</label><br><label class="labels"><b>{{ $tournamentlist->status }}</b></label></div>
            </div>
        </div> -->
    </div>
</div>
</div>
</div>
@endsection