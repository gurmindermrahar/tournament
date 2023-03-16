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
                    <h4 class="card-title">Add User</h4>
                    <p class="card-description">Add User</p>

                    @if(isset($user))
                    {{ Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminUser','data-validate'=>true]) }}
                    @else
                        {{ Form::open(['route' => 'admin.users.store','files'=> true,'class'=>'validate-me','id'=>'AdminUser','data-validate'=>true]) }}
                    @endif
                      <div class="form-group">
                        <label for="name">Name</label>
                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name','id'=>'name','aria-describedby'=> 'name_error','required'=>true]) }}
                        @if($errors->has('name'))
                        <small id="name_error" class="form-text text-danger">{{ $errors->first('name') }}</small>
                        @endif

                      </div>
                      <div class="form-group">
                        <label for="email">Email address</label>
                        {{ Form::email('email',old('email'),['class'=>'form-control','placeholder'=>'Enter name','id'=>'email','aria-describedby'=> 'email_error','required'=>true]) }}
                        @if($errors->has('email'))
                        <small id="email_error" class="form-text text-danger">{{ $errors->first('email') }}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>

                        {{--
                            {{ Form::password('password',old('password'),['class'=>'form-control','placeholder'=>'Enter name','id'=>'password','aria-describedby'=> 'password_error']) }}
                        @if($errors->has('password'))
                        <small id="password_error" class="form-text text-danger">{{ $errors->first('password') }}</small>
                        @endif
                            --}}
                        @if(!isset($user))
                            <input type="password" class="form-control" value="" name="password" id="password" placeholder="Password" aria-describedby='password_error' required>
                            @if($errors->has('password'))
                            <small id="password_error" class="form-text text-danger">{{ $errors->first('password') }}</small>
                            @endif
                        @endif
                      </div>

                        <div class="form-group">
                            <label for="user_role">Default Role</label>
                            {{ Form::select('user_role',UserRole(),old('user_role'),['class'=>'form-control','placeholder'=>'Select Role','id'=>'user_role','aria-describedby'=> 'user_role_error','required'=>true]) }}
                            @if($errors->has('user_role'))
                            <small id="user_role_error" class="form-text text-danger">{{ $errors->first('user_role') }}</small>
                            @endif
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputPassword4">Locale</label>

                            {{ Form::select('user_role',UserLocale(),old('locale'),['class'=>'form-control','placeholder'=>'Select Role','id'=>'locale','aria-describedby'=> 'locale_error']) }}
                            @if($errors->has('locale'))
                            <small id="locale_error" class="form-text text-danger">{{ $errors->first('locale') }}</small>
                            @endif
                        </div> -->


                      <div class="form-group">
                        <label>Image upload</label>

                        {{ Form::file('image',old('image'),['class'=>'form-control','placeholder'=>'image','id'=>'image','aria-describedby'=> 'image_error']) }}
                        @if($errors->has('image'))
                        <small id="image_error" class="form-text text-danger">{{ $errors->first('image') }}</small>
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
