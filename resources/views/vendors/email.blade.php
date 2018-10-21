@extends('template')

@section('title', 'Forgot Password | OWM')

    @section('content')
    <div class="page-wrapper">
        <div class="page-content--bge5-register">
            <div class="container">
                @include('partials.messages')
                <div class="login-wrap">
                    <div class="login-content">
                        @if (session('status'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('status') }}
                        </div>
                        @endif
                        <div class="login-logo">
                            <a href="#">
                                <img src="{{URL::asset("images/icons/logo-01.png")}}" alt="OWM">
                            </a>
                        </div>
                        <div class="login-form">
                            <div class="text-center m-b-10">
                                <h4 class="adapt">"Vendor Forgot Password"</h4>
                            </div>
                            <form method="post" action="{{ route('vendor.password.email') }}">
                                {{ csrf_field() }}
                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input class="au-input au-input--full" value="{{ old('email') }}" type="email" name="email" placeholder="Email*">

                                    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <button class="btn btn-primary btn-block" type="submit">Send Password Reset Link</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection