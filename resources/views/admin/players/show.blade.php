@extends('layouts.admin.app')

@section('content')
  
 <div class="container rounded bg-black mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Logo</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Details:</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><br><label class="labels"><b>{{ $players->name }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Slug</label><br><label class="labels"><b>{{ $players->slug }}</b></label></div>
                 </div>
                <div class="row mt-3">
                     <div class="col-md-6"><label class="labels">Bio</label><br><label class="labels"><b>{{ $players->bio }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Country</label><br><label class="labels"><b>{{ $players->country }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Age</label><br><label class="labels"><b>{{ $players->age }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Total Games</label><br><label class="labels"><b>{{ $players->total_games }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Wins</label><br><label class="labels"><b>{{ $players->wins }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Loses</label><br><label class="labels"><b>{{ $players->loses }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Status</label><br><label class="labels"><b>{{ $players->status }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Facebook URL</label><br><label class="labels"><b>{{ $players->facebook_url }}</b></label></div>
                <div class="col-md-6"><label class="labels">Twitter URL</label><br><label class="labels"><b>{{ $players->twitter_url }}</b></label></div>
                <div class="col-md-6"><label class="labels">Twitch URL</label><br><label class="labels"><b>{{ $players->twitch_url }}</b></label></div>
                <div class="col-md-6"><label class="labels">Youtube URL</label><br><label class="labels"><b>{{ $players->youtube_url }}</b></label></div>
                <div class="col-md-6"><label class="labels">Gears</label><br><label class="labels"><b>{{ $players->gears }}</b></label></div>
                  </div>
            </div>  
        </div> 
        <div class="col-md-4">
            <div class="p-3 py-5">
                

            </div>
        </div>
    </div>
</div>
</div>
</div>  
@endsection