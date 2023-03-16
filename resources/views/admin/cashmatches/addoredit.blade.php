@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Add cash match</h4>
        @if(isset($user))
          {{ Form::model($user, ['route' => ['admin.cashmatches.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminTournament','data-validate'=>true]) }}
        @else
          {{ Form::open(['route' => 'admin.cashmatches.store','files'=> true,'class'=>'validate-me','id'=>'AdminTournament','data-validate'=>true]) }}
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
          <label for="max_teams">Pick Team Team Name</label>
          {{ Form::select('team',max_players(),old('team'),['class'=>'form-control','id'=>'team','aria-describedby'=> 'team_error','required'=>true]) }}
          @if($errors->has('team'))
            <small id="team_error" class="form-text text-danger">{{ $errors->first('team') }}</small>
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
          <label for="exampleSelectTeam">Cash Match Amount</label>
          {{ Form::number('cash_prize',old('cash_prize'),['class'=>'form-control','placeholder'=>' Enter Cash Prize','id'=>'cash_prize','aria-describedby'=> 'cash_prize_error','required'=>true]) }}
            @if($errors->has('cash_prize'))
              <small id="cash_prize_error" class="form-text text-danger">{{ $errors->first('cash_prize') }}</small>
            @endif
        </div>
        <div class="form-group">
          <label for="exampleInputPlayer">Region</label>
          {{ Form::select('region',region(),old('region'),['class'=>'form-control','placeholder'=>'Select Region','id'=>'region','aria-describedby'=> 'region_error','required'=>true]) }}
            @if($errors->has('region'))
              <small id="region_error" class="form-text text-danger">{{ $errors->first('region') }}</small>
            @endif
          </div>

        {{Form::hidden('id', null)}}
        <div class="card-footer">
          {!! Form::submit('Submit', ['class' => 'btn btn-primary submit_btn_new']) !!}
        </div>
        {{ Form::close() }}
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
  $('.datetimepicker2').datetimepicker(

  );
</script>
@endpush
