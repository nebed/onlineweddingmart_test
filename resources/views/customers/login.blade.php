@extends('template')

@section('title', 'User Login | OWM')

@section('content')
	<div class="page-wrapper">
        <div class="page-content--bge5-register">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{URL::asset("images/icons/logo-01.png")}}" alt="OWM">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="post" action="{{ route('customer.login') }}">
                                {{ csrf_field() }}
                                <div class="social-login-content">
                                    <div class="social-button text-center">
                                        <button class="au-btn au-btn--block au-btn--blue">continue with facebook</button>
                                        <p><small>we are not going to post anything without your permission</small></p>
                                    </div>
                                </div>
                                <p class="text-center">-OR-<p>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input class="au-input au-input--full" value="{{ old('email') }}" type="email" name="email" placeholder="Email*">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password*">

                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me
                                    </label>
                                    <label>
                                        <a href="{{route('customer.password.request')}}">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green" type="submit">sign in</button>
                            </form>
                            <div class="register-link text-right m-b-20">
                                <p>
                                    Don't have an account?
                                    <a href="/user/register">Sign Up</a>
                                </p>
                            </div>
                            <div class="card card-body bg-light">
                                <p>Are you a vendor?</p>
                                 <a href="/vendor/login" class="btn-block btn-primary btn">Business Sign In
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection