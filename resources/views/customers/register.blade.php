@extends('template')

@section('title', 'User Register | OWM')

@section('content')

<body class="animsition">
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
                            <div class="text-center m-b-10">
                                <h4 class="adapt">"A dream without a plan is just a wish"</h4>
                                <h6 class="adapt">Sign Up to start planning your Dream Wedding!</h6>
                            </div>
                            <div class="social-login-content">
                                    <div class="social-button text-center">
                                        <button class="au-btn au-btn--block au-btn--blue">Continue with Facebook</button>
                                        <p><small>we are not going to post anything without your permission</small></p>
                                    </div>
                                </div>
                                <p class="text-center">-OR-<p>
                            {!! Form::open(['route'=>'customer.register']) !!}
                                <div class="form-group ">
                                    {{Form::text('name',null,['class'=>'au-input au-input--full', 'type'=>'text', 'placeholder'=>'Your Name*' ])}}
                                </div>
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{Form::email('email',null,['class'=>'au-input au-input--full', 'placeholder'=>'Your Email*'])}}
                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{Form::password('password',['class'=>'au-input au-input--full','placeholder'=>'Password*'])}}
                                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    {{Form::password('password_confirmation',['class'=>'au-input au-input--full','placeholder'=>'Confirm Password*'])}}
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree"><a href="/policy">Agree to the terms and policy</a>
                                    </label>
                                </div>
                                {{Form::submit('Register',['class'=>'au-btn au-btn--block au-btn--green'])}}
                                <!--<div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div>-->
                            {!! Form::close() !!}
                            <div class="register-link text-right m-b-20">
                                <p>
                                    Already have account?
                                    <a href="{{route('login.customer')}}">Sign In</a>
                                </p>
                            </div>
                            <div class="card card-body bg-light">
                                <p>Are you a Vendor?</p>
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