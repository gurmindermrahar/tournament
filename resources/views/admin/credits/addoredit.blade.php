@extends('layouts.admin.app')

@section('content')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
          <h4 class="card-title">Add Credit</h4>
            @if(isset($user))
              {{ Form::model($user, ['route' => ['admin.credits.update', $user->id], 'method' => 'patch','files'=> true,'class'=>'validate-me','id'=>'AdminCredit','data-validate'=>true]) }}
            @else
              {{ Form::open(['route' => 'admin.credits.store','files'=> true,'class'=>'validate-me','id'=>'AdminCredit','data-validate'=>true]) }}
            @endif

            <div class="form-group">
                <label for="credits">Credits</label>
                {{ Form::number('credits',old('credits'),['class'=>'form-control','placeholder'=>' Enter Cash Prize','id'=>'credits','aria-describedby'=> 'credits_error','required'=>true]) }}
                @if($errors->has('credits'))
                  <small id="credits_error" class="form-text text-danger">{{ $errors->first('credits') }}</small>
                @endif
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                {{ Form::number('price',old('price'),['class'=>'form-control','placeholder'=>' Enter Cash Prize','id'=>'price','aria-describedby'=> 'price_error','required'=>true]) }}
                @if($errors->has('price'))
                  <small id="price_error" class="form-text text-danger">{{ $errors->first('price') }}</small>
                @endif
            </div>

            <div class="form-group">
              <label for="currency">Currency</label>
                {{ Form::select('currency',currencies(),old('currency'),['class'=>'form-control','placeholder'=>'Select Currency','id'=>'currency','aria-describedby'=> 'currency_error','required'=>true]) }}
                @if($errors->has('currency'))
                  <small id="teams_error" class="form-text text-danger">{{ $errors->first('currency') }}</small>
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
  $('.datetimepicker2').datetimepicker(

  );
</script>
@endpush
