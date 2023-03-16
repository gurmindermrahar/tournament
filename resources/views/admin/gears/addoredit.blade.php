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
                    <h4 class="card-title">Add Gear</h4>
                    <p class="card-description">Add Gear</p>

                    @if(isset($user))
                    {{ Form::model($user, ['route' => ['admin.gears.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminGears','data-validate'=>true]) }}
                    {{ 'yes' }}
                    @else
                    {{ 'hello' }}
                        {{ Form::open(['route' => 'admin.gears.store','files'=> true,'class'=>'validate-me','id'=>'AdminGears','data-validate'=>true]) }}
                    @endif
                      <div class="form-group">
                        <label for="name">Name</label>
                        {{ Form::text('name',old('name'),['class'=>'form-control','placeholder'=>'Enter name','id'=>'name','aria-describedby'=> 'name_error','required'=>true]) }}
                        @if($errors->has('name'))
                        <small id="name_error" class="form-text text-danger">{{ $errors->first('name') }}</small>
                        @endif

                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        {{ Form::textarea('description',old('description'),['class'=>'form-control','placeholder'=>'Enter Description','id'=>'description','aria-describedby'=> 'email_error']) }}
                        @if($errors->has('description'))
                        <small id="description_error" class="form-text text-danger">{{ $errors->first('description') }}</small>
                        @endif
                      </div>
                      <div class="form-group">
                        <label for="exampleInputimage4">Image upload</label>
                            {{ Form::file('image',['class'=>'form-control','placeholder'=>'Enter image','id'=>'image','aria-describedby'=> 'image_error']) }}
                        @if($errors->has('image'))
                        <small id="image_error" class="form-text text-danger">{{ $errors->first('image') }}</small>
                        @endif

                      </div>

                        <div class="form-group">
                            <label for="user_role">Price</label>
                            {{ Form::text('price',old('price'),['class'=>'form-control','placeholder'=>'Enter Price','id'=>'user_role','aria-describedby'=> 'price_error','required'=>true]) }}
                            @if($errors->has('price'))
                            <small id="price_error" class="form-text text-danger">{{ $errors->first('price') }}</small>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword4">link</label>

                            {{ Form::text('link',old('link'),['class'=>'form-control','placeholder'=>'Enter link','id'=>'link','aria-describedby'=> 'link_error']) }}
                            @if($errors->has('link'))
                            <small id="link_error" class="form-text text-danger">{{ $errors->first('locale') }}</small>
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
