@extends('template')

@section('title', 'Vendor Register | OWM')

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
                                <h4 class="adapt">"Grow Your Business with OWM"</h4>
                                <h6 class="adapt">Sign in to access your Dashboard</h6>
                            </div>
                            {!! Form::open(['route'=>'vendor.register']) !!}
                                <div class="form-group">
                                    {{Form::text('name',null,['class'=>'au-input au-input--full', 'type'=>'text', 'placeholder'=>'Your Name*' ])}}
                                </div>
                                <div class="form-group">
                                    {{Form::email('email',null,['class'=>'au-input au-input--full', 'placeholder'=>'Your Email*'])}}
                                </div>
                                <div class="form-group">
                                    {{Form::text('brand_name',null,['class'=>'au-input au-input--full', 'placeholder'=>'Brand Name*'])}}
                                </div>
                                <div class="form-group">
                                <select class="form-control au-input--full" name="service_id">
                                	<label>Vendor Type</label>
				                    <option value=''>Select Vendor Type*</option>
				                    @foreach($servicesmenu as $service)
				                    <option value='{{$service->id}}'>{{$service->name}}</option>
				                    @endforeach

				                  </select>
				              	</div>
				              	<div class="form-group">
                                <select class="form-control au-input--full" name="location_id">
				                    <option value=''>City (choose your base city here)*</option>
				                    @foreach($locationsmenu as $location)
				                    <option value='{{$location->id}}'>{{$location->name}}</option>
				                    @endforeach

				                  </select>
				              	</div>
                                <div class="form-group">
                                    {{Form::password('password',['class'=>'au-input au-input--full','placeholder'=>'Password*'])}}
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
                                    <a href="{{route('login.vendor')}}">Sign In</a>
                                </p>
                            </div>
                            <div class="card card-body bg-light">
                                <p>Are you a customer?</p>
                                 <a href="/user/login" class="btn-block btn-primary btn">Customer Sign In
                                 </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection