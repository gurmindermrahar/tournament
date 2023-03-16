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
                    <div class="col-md-6"><label class="labels">Price</label><br><label class="labels"><b>{{ $tournamentlist->price }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Credits</label><br><label class="labels"><b>{{ $tournamentlist->credits }}</b></label></div>
                    <div class="col-md-6"><label class="labels">Currency</label><br><label class="labels"><b>{{ $tournamentlist->currency }}</b></label></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
