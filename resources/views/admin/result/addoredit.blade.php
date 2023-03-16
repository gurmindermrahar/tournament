@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Add Result</h4>
        @if(isset($user))
              {{ Form::model($user, ['route' => ['admin.result.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminResult','data-validate'=>true]) }}
            @else
                {{ Form::open(['route' => 'admin.result.store','files'=> true,'class'=>'validate-me','id'=>'AdminResult','data-validate'=>true]) }}
            @endif
            <div class="form-group">Title
            {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Title','id'=>'title','aria-describedby'=> 'title_error','required'=>true]) }}
                @if($errors->has('title'))
                  <small id="title_error" class="form-text text-muted">{{ $errors->first('title') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputSlug">Description</label>
            {{ Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Enter Description','id'=>'description','aria-describedby'=> 'email_error','required'=>true]) }}
                @if($errors->has('slug'))
                  <small id="slug_error" class="form-text text-muted">{{ $errors->first('slug') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Tournament</label>
            {{ Form::select('tournament',UserRole(),old('tournament'),['class'=>'form-control','placeholder'=>'Select tournament','id'=>'tournament','aria-describedby'=> 'tournament_error','required'=>true]) }}
                @if($errors->has('tournament'))
                  <small id="tournament_error" class="form-text text-muted">{{ $errors->first('tournament') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Team</label>
            {{ Form::select('teams',UserRole(),old('teams'),['class'=>'form-control','placeholder'=>'Select teams','id'=>'teams','aria-describedby'=> 'teams_error','required'=>true]) }}
                @if($errors->has('teams'))
                  <small id="teams_error" class="form-text text-muted">{{ $errors->first('teams') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputPlayer">Player</label>
            {{ Form::number('player',old('player'),['class'=>'form-control','placeholder'=>'Enter player','id'=>'player','aria-describedby'=> 'player_error','required'=>true]) }}
                @if($errors->has('player'))
                  <small id="group_error" class="form-text text-muted">{{ $errors->first('player') }}</small>
                @endif
             </div>
             <div class="form-group">
            <label for="exampleInputPlayer">Team A Point</label>
            {{ Form::number('team_a_point',old('team_a_point'),['class'=>'form-control','placeholder'=>'Enter player','id'=>'player','aria-describedby'=> 'team_a_point_error','required'=>true]) }}
                @if($errors->has('team_a_point'))
                  <small id="team_a_point_error" class="form-text text-muted">{{ $errors->first('team_a_point') }}</small>
                @endif
             </div>
             <div class="form-group">
            <label for="exampleInputPlayer">Team B Point</label>
            {{ Form::number('team_b_point',old('team_b_point'),['class'=>'form-control','placeholder'=>'Enter player','id'=>'player','aria-describedby'=> 'team_b_point_error','required'=>true]) }}
                @if($errors->has('team_b_point'))
                  <small id="team_b_point_error" class="form-text text-muted">{{ $errors->first('team_b_point') }}</small>
                @endif
             </div>
             <div class="form-group">
            <label for="exampleInputPlayer">Remarks</label>
            {{ Form::number('remarks',old('remarks'),['class'=>'form-control','placeholder'=>'','id'=>'player','aria-describedby'=> 'remarks_error','required'=>true]) }}
                @if($errors->has('team_b_point'))
                  <small id="remarks_error" class="form-text text-muted">{{ $errors->first('remarks') }}</small>
                @endif
             </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Status</label>
            {{ Form::select('status',UserRole(),old('status'),['class'=>'form-control','placeholder'=>'Select status','id'=>'status','aria-describedby'=> 'status_error','required'=>true]) }}
                @if($errors->has('status'))
                  <small id="teams_error" class="form-text text-muted">{{ $errors->first('status') }}</small>
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
