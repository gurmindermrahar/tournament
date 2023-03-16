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
                    <div class="col-md-6"><label class="labels">Title</label><br><label class="labels"><b>{{ $result->title }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Tournament</label><br><label class="labels"><b>{{ $result->tournament }}</b></label></div>
                 </div>
                <div class="row mt-3">
                     <div class="col-md-6"><label class="labels">description</label><br><label class="labels"><b>{{ $result->description }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Teams</label><br><label class="labels"><b>{{ $result->teams }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Player</label><br><label class="labels"><b>{{ $result->player }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Team A Point</label><br><label class="labels"><b>{{ $result->team_a_point }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Team B Point</label><br><label class="labels"><b>{{ $result->team_b_point }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Remarks</label><br><label class="labels"><b>{{ $result->remarks }}</b></label></div>
                     <div class="col-md-6"><label class="labels">Status</label><br><label class="labels"><b>{{ $result->status }}</b></label></div>
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