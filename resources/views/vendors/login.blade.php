@extends('template')

@section('title', 'Vendor Login | OWM')

@section('content')
	<div class="page-wrapper">
        <div class="page-content--bge5-register">
            <div class="container">
                @include('partials.messages')
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{URL::asset("images/icons/logo-01.png")}}" alt="OWM">
                            </a>
                        </div>
                        <div class="login-form">
                            <div class="text-center m-b-10">
                                <h4 class="adapt">"Grow Your Business with OWM"</h4>
                                <h6 class="adapt">Sign in to access your Dashboard</h6>
                            </div>
                            <form method="post" action="{{ route('vendor.login') }}">
                                {{ csrf_field() }}
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
                                        <a href="{{route('vendor.password.request')}}">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--blue2" type="submit">sign in</button>
                            </form>
                            <div class="register-link text-right m-b-20">
                                <p>
                                    Register as a Vendor?
                                    <a href="{{route('register.vendor')}}">Sign Up</a>
                                </p>
                            </div>
                            <div class="card card-body bg-light">
                                <p>Are you a customer?</p>
                                 <a href="/user/login" class="btn-block btn-success btn">Customer Sign In
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection