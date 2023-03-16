@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Add Team</h4>
        @if(isset($user))
              {{ Form::model($user, ['route' => ['admin.teams.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminTeam','data-validate'=>true]) }}
            @else
                {{ Form::open(['route' => 'admin.teams.store','files'=> true,'class'=>'validate-me','id'=>'AdminTeam','data-validate'=>true]) }}
            @endif
            <div class="form-group">Title
            {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Title','id'=>'title','aria-describedby'=> 'title_error','required'=>true]) }}
                @if($errors->has('title'))
                  <small id="title_error" class="form-text text-danger">{{ $errors->first('title') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputSlug">Slug</label>
            {{ Form::text('slug',old('slug'),['class'=>'form-control','placeholder'=>'Slug','id'=>'slug','aria-describedby'=> 'slug_error']) }}
                @if($errors->has('slug'))
                  <small id="slug_error" class="form-text text-danger">{{ $errors->first('slug') }}</small>
                @endif
            </div>

            {{-- <div class="form-group">
              <label for="exampleInputLogo">Logo</label>
              {{ Form::file('logo',['class'=>'form-control','placeholder'=>'logo','id'=>'logo','aria-describedby'=> 'logo_error']) }}
                @if($errors->has('logo'))
                  <small id="logo_error" class="form-text text-danger">{{ $errors->first('logo') }}</small>
                @endif
            </div> --}}

            <div class="form-group">
            <label for="exampleInputLogo">About Us</label>
             {{ Form::text('about',old('about'),['class'=>'form-control','id'=>'about','aria-describedby'=> 'about_error','required'=>true]) }}
                @if($errors->has('about'))
                  <small id="about_error" class="form-text text-danger">{{ $errors->first('about') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputVenue">Venue</label>
             {{ Form::text('venue',old('venue'),['class'=>'form-control','placeholder'=>'venue','id'=>'venue','aria-describedby'=> 'venue_error','required'=>true]) }}
                @if($errors->has('venue'))
                  <small id="group_error" class="form-text text-danger">{{ $errors->first('venue') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputGroup">Group</label>
            {{ Form::text('group',old('group'),['class'=>'form-control','placeholder'=>'group','id'=>'group','aria-describedby'=> 'group_error','required'=>true]) }}
                @if($errors->has('group'))
                  <small id="group_error" class="form-text text-danger">{{ $errors->first('group') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputDate">Founding Date</label>
             {{ Form::text('date',old('date'),['class'=>'form-control','id'=>'date','aria-describedby'=> 'date_error','required'=>true]) }}
                @if($errors->has('date'))
                  <small id="date_error" class="form-text text-danger">{{ $errors->first('date') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputWins">Wins</label>
            {{ Form::number('wins',old('wins'),['class'=>'form-control','placeholder'=>'','id'=>'player','aria-describedby'=> 'wins_error','required'=>true]) }}
                @if($errors->has('wins'))
                  <small id="wins_error" class="form-text text-danger">{{ $errors->first('wins') }}</small>
                @endif
             </div>
             <div class="form-group">
            <label for="exampleInputPlayer">Loses</label>
            {{ Form::number('loses',old('loses'),['class'=>'form-control','placeholder'=>'','id'=>'player','aria-describedby'=> 'loses_error','required'=>true]) }}
                @if($errors->has('wins'))
                  <small id="loses_error" class="form-text text-danger">{{ $errors->first('loses') }}</small>
                @endif
             </div>
             <div class="form-group">
            <label for="exampleInputPlayer">Total Games</label>
            {{ Form::number('total_games',old('total_games'),['class'=>'form-control','placeholder'=>'','id'=>'total_games','aria-describedby'=> 'total_games_error','required'=>true]) }}
                @if($errors->has('wins'))
                  <small id="total_games_error" class="form-text text-danger">{{ $errors->first('total_games') }}</small>
                @endif
             </div>
             <div class="form-group">
            <label for="exampleInputPlayer">Player</label>
            {{ Form::number('player',old('total_games'),['class'=>'form-control','placeholder'=>'','id'=>'total_games','aria-describedby'=> 'player_error','required'=>true]) }}
                @if($errors->has('player'))
                  <small id="player_games_error" class="form-text text-danger">{{ $errors->first('player') }}</small>
                @endif
             </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Status</label>
            {{ Form::select('status',UserRole(),old('status'),['class'=>'form-control','placeholder'=>'Select status','id'=>'status','aria-describedby'=> 'status_error','required'=>true]) }}
                @if($errors->has('status'))
                  <small id="teams_error" class="form-text text-danger">{{ $errors->first('status') }}</small>
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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
            tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount', 'image'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
 @endsection
