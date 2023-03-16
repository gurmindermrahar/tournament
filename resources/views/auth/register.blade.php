@extends('layouts.frontend.app')

@section('content')

<section class="signup-page">
    <div class="main_form_view">
       <div class="container">
          <div class="form-holder">
             <div class="form-title">
                <h1>SIGNUP</h1>
             </div>
             <div class="form-content">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="username">
                    <i mi-name="person" class="material-icons navigation-icon"></i>
                    <input type="text" placeholder="Username" id="username" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    <span class="invalid-feedback d-none" role="alert" id="usernameerror">
                    </span>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="password">
                    <i mi-name="lock" class="material-icons navigation-icon"></i>
                    <input type="password" placeholder="Password" id="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <i mi-name="visibility_off" class="material-icons navigation-icon password-eye-icon"></i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="c_password">
                    <i mi-name="beenhere" class="material-icons navigation-icon"></i>
                    <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                    <i mi-name="visibility_off" class="material-icons navigation-icon password-eye-icon"></i>
                    </div>
                    <div class="email">
                    <i mi-name="email" class="material-icons navigation-icon"></i>
                    <input type="email" placeholder="Email" id="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="from_cta_btn">
                    <button type="submit">Signup</button>
                    <p>Already have an account? <a href="{{url('login')}}"> Login</a></p>
                    </div>
                </form>
             </div>
          </div>
       </div>
    </div>
 </section>




{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
@push('scripts')
<script>
    $(document).ready(function(){
        $("#username").change(function(e){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            e.preventDefault();
            var formData = {
                username: $(this).val(),
            };
            $.ajax({
                type: 'POST',
                url: "{{route('checkUserexist')}}",
                data: formData,
                dataType: 'json',
                success: function (data) {
                    $('#usernameerror').addClass('d-none');
                },
                error: function (xhr, status, error) {
                   $('#usernameerror').removeClass('d-none').html("<strong>"+xhr.responseJSON.message+"</strong>");
                    console.log(xhr.responseJSON, status, error);
                }
            });
        });
    });
</script>
@endpush
