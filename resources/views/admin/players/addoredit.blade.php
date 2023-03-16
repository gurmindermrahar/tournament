@extends('layouts.admin.app')

@section('content')
        <div class="content-wrapper">
            <div class="page-header">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <!-- <li class="breadcrumb-item"><a href="#">Forms</a></li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Player</h4>
                    <p class="card-description">Add Player</p>

                    @if(isset($user))
                    {{ Form::model($user, ['route' => ['admin.players.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminPlayer','data-validate'=>true]) }}
                    @else
                        {{ Form::open(['route' => 'admin.players.store','files'=> true,'class'=>'validate-me','id'=>'AdminPlayer','data-validate'=>true]) }}
                    @endif
                      <div class="form-group">
                        <label for="name">Name</label>
                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name','id'=>'name','aria-describedby'=> 'name_error','required'=>true]) }}
                        @if($errors->has('name'))
                        <small id="name_error" class="form-text text-danger">{{ $errors->first('name') }}</small>
                        @endif

                      </div>
                      <div class="form-group">
                        <label for="slug">Slug</label>
                        {{ Form::text('slug',old('slug'),['class'=>'form-control','placeholder'=>'Enter slug','id'=>'slug','aria-describedby'=> 'slug_error','required'=>true]) }}
                        @if($errors->has('slug'))
                        <small id="slug_error" class="form-text text-danger">{{ $errors->first('slug') }}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="bio">Bio</label>
                        {{ Form::text('bio',old('bio'),['class'=>'form-control','placeholder'=>'Enter bio','id'=>'bio','aria-describedby'=> 'bio_error','required'=>true]) }}
                        @if($errors->has('bio'))
                        <small id="bio_error" class="form-text text-danger">{{ $errors->first('bio') }}</small>
                        @endif
                      </div>
                       <div class="form-group">
                        <label for="country">Country</label>
                        {{ Form::text('country',old('country'),['class'=>'form-control','placeholder'=>'Enter country','id'=>'country','aria-describedby'=> 'slug_error','required'=>true]) }}
                        @if($errors->has('country'))
                        <small id="country_error" class="form-text text-danger">{{ $errors->first('country') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="age">Age</label>
                        {{ Form::text('age',old('age'),['class'=>'form-control','placeholder'=>'Enter age','id'=>'age','aria-describedby'=> 'slug_error','required'=>true]) }}
                        @if($errors->has('age'))
                          <small id="age_error" class="form-text text-danger">{{ $errors->first('age') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="games">Total Games</label>
                        {{ Form::number('total_games',old('total_games'),['class'=>'form-control','placeholder'=>'Enter Total Games','id'=>'total_games','aria-describedby'=> 'total_games_error','required'=>true]) }}
                        @if($errors->has('total_games'))
                        <small id="total_games_error" class="form-text text-danger">{{ $errors->first('total_games') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="wins">Wins</label>
                        {{ Form::number('wins',old('wins'),['class'=>'form-control','placeholder'=>'Enter wins','id'=>'wins','aria-describedby'=> 'wins_error','required'=>true]) }}
                        @if($errors->has('wins'))
                        <small id="wins_error" class="form-text text-danger">{{ $errors->first('wins') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="loses">Loses</label>
                        {{ Form::number('loses',old('loses'),['class'=>'form-control','placeholder'=>'Enter loses','id'=>'loses','aria-describedby'=> 'loses_error','required'=>true]) }}
                        @if($errors->has('loses'))
                        <small id="loses_error" class="form-text text-danger">{{ $errors->first('loses') }}</small>
                        @endif
                      </div>



                      <div class="form-group">
                        <label for="exampleInputimage4">Image upload</label>
                            {{ Form::file('image',['class'=>'form-control','placeholder'=>'Enter image','id'=>'image','aria-describedby'=> 'image_error','required'=>true]) }}
                        @if($errors->has('image'))
                        <small id="image_error" class="form-text text-danger">{{ $errors->first('image') }}</small>
                        @endif

                      </div>

                      <div class="form-group">
                        <label for="facebook">Facebook Url</label>
                        {{ Form::text('facebook_url',old('facebook_url'),['class'=>'form-control','placeholder'=>'Enter facebook url','id'=>'facebook_url','aria-describedby'=> 'facebook_url_error','required'=>true]) }}
                        @if($errors->has('facebook_url'))
                        <small id="ffacebook_url_error" class="form-text text-danger">{{ $errors->first('facebook_url') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="twitter_url">Twitter Url</label>
                        {{ Form::text('twitter_url',old('twitter_url'),['class'=>'form-control','placeholder'=>'Enter twitter url','id'=>'twitter_url','aria-describedby'=> 'twitter_url_error','required'=>true]) }}
                        @if($errors->has('twitter_url'))
                        <small id="twitter_url_error" class="form-text text-danger">{{ $errors->first('twitter_url') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="twitch_url">Twitch Url</label>
                        {{ Form::text('twitch_url',old('twitch_url'),['class'=>'form-control','placeholder'=>'Enter twitch url','id'=>'twitch_url','aria-describedby'=> 'twitch_url_error','required'=>true]) }}
                        @if($errors->has('twitch_url'))
                        <small id="twitch_url" class="form-text text-danger">{{ $errors->first('twitch_url') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                        <label for="youtube">Youtube Url</label>
                        {{ Form::text('youtube_url',old('youtube_url'),['class'=>'form-control','placeholder'=>'Enter youtube url','id'=>'youtube_url','aria-describedby'=> 'youtube_url_error','required'=>true]) }}
                        @if($errors->has('youtube_url'))
                        <small id="youtube_url" class="form-text text-danger">{{ $errors->first('youtube_url') }}</small>
                        @endif
                      </div>

                      <div class="form-group">
                          <label for="gears">Gears</label>
                          {{ Form::text('gears',old('gears'),['class'=>'form-control','placeholder'=>'Enter gears','id'=>'gears','aria-describedby'=> 'gears_error','required'=>true]) }}
                          @if($errors->has('gears'))
                          <small id="gears" class="form-text text-danger">{{ $errors->first('gears') }}</small>
                          @endif
                      </div>

                      {{Form::hidden('id', null)}}
                      {!! Form::submit('Submit', ['class' => 'btn btn-primary me-2']) !!}
                      {{ Form::close() }}

                  </div>
                </div>
              </div>

          <!-- content-wrapper ends -->

          @endsection
