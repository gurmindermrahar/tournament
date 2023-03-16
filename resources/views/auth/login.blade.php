@extends('layouts.frontend.app')

@section('content')
<section class="login-page">
   <div class="main_form_view">
      <div class="container">
         <div class="form-holder">
            <div class="form-title">
               <h1>LOGIN</h1>
            </div>
            <div class="form-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="username">
                        <i mi-name="person" class="material-icons navigation-icon"></i>
                        <input type="email" placeholder="Username" id="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="password">
                        <i mi-name="lock" class="material-icons navigation-icon"></i>
                        <input type="password" placeholder="Password" id="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form_options">
                        <div class="remember">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                        </div>
                        <div class="forgot_pass">
                            <a href="{{url('/password/reset')}}"> Forgot Password? </a>
                        </div>
                    </div>
                    <div class="from_cta_btn">
                        <button type="submit">LOGIN</button>
                        <p>Don’t have an account? <a href="{{url('register')}}"> Join the fun!</a></p>
                    </div>
                </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
