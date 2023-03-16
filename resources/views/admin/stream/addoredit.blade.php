@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Add Stream</h4>
        @if(isset($user))
              {{ Form::model($user, ['route' => ['admin.stream.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminStream','data-validate'=>true]) }}
            @else
                {{ Form::open(['route' => 'admin.stream.store','files'=> true,'class'=>'validate-me','id'=>'AdminStream','data-validate'=>true]) }}
            @endif
            <div class="form-group">Title
            {{ Form::text('title',old('title'),['class'=>'form-control','placeholder'=>'Title','id'=>'title','aria-describedby'=> 'title_error','required'=>true]) }}
                @if($errors->has('title'))
                  <small id="title_error" class="form-text text-muted">{{ $errors->first('title') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputSlug">Slug</label>
            {{ Form::text('slug',old('slug'),['class'=>'form-control','placeholder'=>'Slug','id'=>'slug','aria-describedby'=> 'slug_error']) }}
                @if($errors->has('slug'))
                  <small id="slug_error" class="form-text text-muted">{{ $errors->first('slug') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputLogo">Description</label>
             {{ Form::text('description',old('description'),['class'=>'form-control','id'=>'description','aria-describedby'=> 'description_error','required'=>true]) }}
                @if($errors->has('description'))
                  <small id="description_error" class="form-text text-muted">{{ $errors->first('description') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputLogo">URL</label>
             {{ Form::text('url',old('url'),['class'=>'form-control','id'=>'url','aria-describedby'=> 'url_error','required'=>true]) }}
                @if($errors->has('url'))
                  <small id="url_error" class="form-text text-muted">{{ $errors->first('url') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleInputLogo">Image</label>
            {{ Form::file('image',['class'=>'form-control','placeholder'=>'image','id'=>'logo','aria-describedby'=> 'image_error']) }}
                @if($errors->has('image'))
                  <small id="image_error" class="form-text text-muted">{{ $errors->first('image') }}</small>
                @endif
            </div>
            <div class="form-group">
            <label for="exampleSelectTeam">Status</label>
            {{ Form::select('status',UserRole(),old('status'),['class'=>'form-control','placeholder'=>'Select status','id'=>'status','aria-describedby'=> 'status_error']) }}
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
