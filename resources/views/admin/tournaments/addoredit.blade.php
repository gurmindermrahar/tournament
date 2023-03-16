@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Tournament</h4>
            @if(isset($user))
              {{ Form::model($user, ['route' => ['admin.tournaments.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminTournament','data-validate'=>true]) }}
            @else
              {{ Form::open(['route' => 'admin.tournaments.store','files'=> true,'class'=>'validate-me','id'=>'AdminTournament','data-validate'=>true]) }}
            @endif

            <div class="form-group">
              <label for="start_time">Start Time</label>
              {{ Form::text('start_time',old('start_time'),['class'=>'form-control datetimepicker2','placeholder'=>'Start Time','id'=>'start_time','aria-describedby'=> 'start_time_error','required'=>true]) }}
              @if($errors->has('start_time'))
                <small id="start_time_error" class="form-text text-danger">{{ $errors->first('start_time') }}</small>
              @endif
            </div>

            <div class="form-group">
              <label for="game">Game</label>
                {{ Form::select('game',games(),old('game'),['class'=>'form-control','placeholder'=>'Select Game','id'=>'game','aria-describedby'=> 'game_error','required'=>true]) }}
                @if($errors->has('game'))
                  <small id="teams_error" class="form-text text-danger">{{ $errors->first('game') }}</small>
                @endif
            </div>

            <div class="form-group">
              <label for="game_mode">Game Mode</label>
                {{ Form::select('game_mode',gameMode(),old('game_mode'),['class'=>'form-control','placeholder'=>'Select Game mode','id'=>'game_mode','aria-describedby'=> 'game_mode_error','required'=>true]) }}
                @if($errors->has('game_mode'))
                  <small id="game_mode_error" class="form-text text-danger">{{ $errors->first('game_mode') }}</small>
                @endif
            </div>

            <div class="form-group">
              <label for="max_teams">Max Players</label>
              {{ Form::select('max_players',max_players(),old('max_players'),['class'=>'form-control','id'=>'max_players','aria-describedby'=> 'max_players_error','required'=>true]) }}
              @if($errors->has('max_players'))
                <small id="max_players_error" class="form-text text-danger">{{ $errors->first('max_players') }}</small>
              @endif
            </div>

            <div class="form-group">
              <label for="max_teams">Max Teams</label>
              {{ Form::select('max_teams',max_teams(),old('max_teams'),['class'=>'form-control','id'=>'max_teams','placeholder'=>'Select Team','aria-describedby'=> 'max_teams_error','required'=>true]) }}
              @if($errors->has('max_teams'))
                <small id="max_teams_error" class="form-text text-danger">{{ $errors->first('max_teams') }}</small>
              @endif
            </div>

            <div class="form-group">
              <label for="play_per_team">Players per Team</label>
                {{ Form::select('play_per_team',playPerTeam(),old('play_per_team'),['class'=>'form-control','placeholder'=>'Select Players','id'=>'play_per_team','aria-describedby'=> 'play_per_team_error','required'=>true]) }}
                @if($errors->has('play_per_team'))
                  <small id="play_per_team_error" class="form-text text-danger">{{ $errors->first('play_per_team') }}</small>
                @endif
            </div>

            <div class="form-group">
            <label for="exampleInputVenue">Credit Entry</label>
             {{ Form::select('credit_entry',credit_entry(),old('credit_entry'),['class'=>'form-control','placeholder'=>'Select Entry Credit','id'=>'credit_entry','aria-describedby'=> 'credit_entry_error','required'=>true]) }}
                @if($errors->has('credit_entry'))
                  <small id="credit_entry_error" class="form-text text-danger">{{ $errors->first('credit_entry') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputGroup">Platform</label>
            {{ Form::select('platform',platform(),old('platform'),['class'=>'form-control','placeholder'=>'Select Platform','id'=>'group','aria-describedby'=> 'platform_error','required'=>true]) }}
                @if($errors->has('platform'))
                  <small id="platform_error" class="form-text text-danger">{{ $errors->first('platform') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputDate">Type</label>
             {{ Form::text('type',old('type'),['class'=>'form-control','id'=>'type','aria-describedby'=> 'type_error','required'=>true]) }}
                @if($errors->has('type'))
                  <small id="type_error" class="form-text text-danger">{{ $errors->first('type') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Cash Prize</label>
            {{ Form::number('cash_prize',old('cash_prize'),['class'=>'form-control','placeholder'=>' Enter Cash Prize','id'=>'cash_prize','aria-describedby'=> 'cash_prize_error','required'=>true]) }}
                @if($errors->has('cash_prize'))
                  <small id="cash_prize_error" class="form-text text-danger">{{ $errors->first('cash_prize') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputPlayer">Region</label>
            {{ Form::select('region[]',region(),old('region'),['multiple' => true,'class'=>'form-control select2','placeholder'=>'Select Region','id'=>'region','aria-describedby'=> 'region_error']) }}
                @if($errors->has('region'))
                  <small id="region_error" class="form-text text-danger">{{ $errors->first('region') }}</small>
                @endif
             </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Pixel Esports Profile</label>
            {{ Form::text('pixel_esports_profil',old('pixel_esports_profil'),['class'=>'form-control','placeholder'=>'Pixel Esports Profile','id'=>'pixel_esports_profil','aria-describedby'=> 'pixel_esports_profil_error','required'=>true]) }}
                @if($errors->has('status'))
                  <small id="pixel_esports_profil_error" class="form-text text-danger">{{ $errors->first('pixel_esports_profil') }}</small>
                @endif
            </div>



            {{Form::hidden('id', null)}}
            <div class="card-footer">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary submit_btn_new']) !!}
            </div>
          {{ Form::close() }}
        </div>
        </form>
        </div>
    </div>
</div>
 @endsection

 @push('styles')

<link rel="stylesheet" href="{{url('assets/css/datetimepicker.min.css')}}">
@endpush

@push('scripts')
<script src="{{url('assets/js/moment.min.js')}}" > </script>
<script src="{{url('assets/js/datetimepicker.min.js')}}" > </script>
<script>
  $('.datetimepicker2').datetimepicker({
    format:'d.m.Y H:i',
  });
</script>
@endpush
