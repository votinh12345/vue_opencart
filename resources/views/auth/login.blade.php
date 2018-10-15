@extends('layouts.login')

@section('content')
<p class="login-box-msg">Sign in to start your session</p>

<form action="{{ route('login') }}" aria-label="{{ __('Login') }}" method="post">
    @csrf
    <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('E-Mail Address') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="{{ __('Password') }}" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <div class="row">
        <div class="col-xs-8">
            <div class="checkbox icheck">
                <label><input type="checkbox"> {{ __('Remember Me') }}</label>
            </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Login') }}</button>
        </div>
        <!-- /.col -->
    </div>
</form>

<div class="social-auth-links text-center">
    <p>- OR -</p>
    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ __('Sign in using Facebook') }}</a>
    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> {{ __('Sign in using Google+') }}</a>
</div>
<!-- /.social-auth-links -->

<a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a><br>
<a href="register.html" class="text-center">{{ __('Register a new membership') }}</a>
@endsection
