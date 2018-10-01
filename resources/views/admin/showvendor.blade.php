@extends('template')

@section('title', 'Admin Dashboard | OWM')

@section('stylesheet')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="/css/photos.css">
@endsection

@section('content')

<body class="animsition" style="animation-duration: 900ms; opacity: 1;">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="{{URL::asset("images/icons/logo-02.png")}}" alt="OWM">
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="index.html">Dashboard 1</a>
                                    </li>
                                    <li>
                                        <a href="index2.html">Dashboard 2</a>
                                    </li>
                                    <li>
                                        <a href="index3.html">Dashboard 3</a>
                                    </li>
                                    <li>
                                        <a href="index4.html">Dashboard 4</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span class="bot-line"></span>eCommerce</a>
                            </li>
                            <li>
                                <a href="table.html">
                                    <i class="fas fa-trophy"></i>
                                    <span class="bot-line"></span>Features</a>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-copy"></i>
                                    <span class="bot-line"></span>Pages</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="login.html">Login</a>
                                    </li>
                                    <li>
                                        <a href="register.html">Register</a>
                                    </li>
                                    <li>
                                        <a href="forget-pass.html">Forget Password</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="#">
                                    <i class="fas fa-desktop"></i>
                                    <span class="bot-line"></span>UI Elements</a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="button.html">Button</a>
                                    </li>
                                    <li>
                                        <a href="badge.html">Badges</a>
                                    </li>
                                    <li>
                                        <a href="tab.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="card.html">Cards</a>
                                    </li>
                                    <li>
                                        <a href="alert.html">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="progress-bar.html">Progress Bars</a>
                                    </li>
                                    <li>
                                        <a href="modal.html">Modals</a>
                                    </li>
                                    <li>
                                        <a href="switch.html">Switchs</a>
                                    </li>
                                    <li>
                                        <a href="grid.html">Grids</a>
                                    </li>
                                    <li>
                                        <a href="fontawesome.html">FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="typo.html">Typography</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            <i class="zmdi zmdi-notifications"></i>
                            <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                                <div class="notifi__title">
                                    <p>You have 3 Notifications</p>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c1 img-cir img-40">
                                        <i class="zmdi zmdi-email-open"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a email notification</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c2 img-cir img-40">
                                        <i class="zmdi zmdi-account-box"></i>
                                    </div>
                                    <div class="content">
                                        <p>Your account has been blocked</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__item">
                                    <div class="bg-c3 img-cir img-40">
                                        <i class="zmdi zmdi-file-text"></i>
                                    </div>
                                    <div class="content">
                                        <p>You got a new file</p>
                                        <span class="date">April 12, 2018 06:50</span>
                                    </div>
                                </div>
                                <div class="notifi__footer">
                                    <a href="#">All notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="header-button-item js-item-menu">
                            <i class="zmdi zmdi-settings"></i>
                            <div class="setting-dropdown js-dropdown">
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-globe"></i>Language</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-pin"></i>Location</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-email"></i>Email</a>
                                    </div>
                                    <div class="account-dropdown__item">
                                        <a href="#">
                                            <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">{{Auth::user()->name}}</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="#">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">{{Auth::user()->name}}</a>
                                            </h5>
                                            <span class="email">{{Auth::user()->email}}</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                    		<form id="logout" action="{{route('logout')}}" method="POST">
                                    			 {{csrf_field()}}
                                    			<a href="#" onclick="document.getElementById('logout').submit();">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    		</form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo-white.png" alt="CoolAdmin">
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map.html">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Posts</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href=""></a>
                                </li>
                                <li>
                                    <a href="">Register</a>
                                </li>
                                <li>
                                    <a href="">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button.html">Button</a>
                                </li>
                                <li>
                                    <a href="badge.html">Badges</a>
                                </li>
                                <li>
                                    <a href="tab.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="card.html">Cards</a>
                                </li>
                                <li>
                                    <a href="alert.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar.html">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal.html">Modals</a>
                                </li>
                                <li>
                                    <a href="switch.html">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome.html">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo.html">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="header-button-item has-noti js-item-menu">
                    <i class="zmdi zmdi-notifications"></i>
                    <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">
                        <div class="notifi__title">
                            <p>You have 3 Notifications</p>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c1 img-cir img-40">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="content">
                                <p>You got a email notification</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c2 img-cir img-40">
                                <i class="zmdi zmdi-account-box"></i>
                            </div>
                            <div class="content">
                                <p>Your account has been blocked</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__item">
                            <div class="bg-c3 img-cir img-40">
                                <i class="zmdi zmdi-file-text"></i>
                            </div>
                            <div class="content">
                                <p>You got a new file</p>
                                <span class="date">April 12, 2018 06:50</span>
                            </div>
                        </div>
                        <div class="notifi__footer">
                            <a href="#">All notifications</a>
                        </div>
                    </div>
                </div>
                <div class="header-button-item js-item-menu">
                    <i class="zmdi zmdi-settings"></i>
                    <div class="setting-dropdown js-dropdown">
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-globe"></i>Language</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-pin"></i>Location</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-email"></i>Email</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="images/icon/avatar-01.jpg" alt="John Doe">
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">john doe</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="images/icon/avatar-01.jpg" alt="John Doe">
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">john doe</a>
                                    </h5>
                                    <span class="email">johndoe@example.com</span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-account"></i>Account</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="#">
                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->
        <div class="page-content--bgf7 mt-2">

            <section>
                <div class="container">
                <div class="row">
                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>{{$vendor->name}} |</strong>
                                        <small> {{$vendor->service->name}} |</small>
                                        <small> {{$vendor->location->name}}</small>
                                    </div>
                                    <div class="card-body card-block">
                                        {!! Form::model($vendor, ['route'=>['vendors.update', $vendor->id], 'method' => 'PUT']) !!}
                                        <div class="form-group">
                                            {{ Form::label('title', 'Login Email ID:', ['for'=>'email','class'=>'form-control-label'])}}
                                            {{Form::email('email', null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                                        </div>
                                        <div class="form-group">
                                            {{ Form::label('title', 'Brand Name', ['for'=>'brand_name','class'=>'form-control-labelt'])}}
                                            {{Form::text('brand_name', null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Category', ['for'=>'service_id','class'=>'form-control-label'])}}
                                            {{Form::text('service_id', $vendor->service->name, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'City', ['for'=>'location_id','class'=>'form-control-label'])}}
                                            {{Form::text('location_id', $vendor->location->name, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Contact Person', ['for'=>'contact_person','class'=>'form-control-label'])}}
                                            {{Form::text('contact_person', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                           {{ Form::label('title', 'Contact Number', ['for'=>'contact_number','class'=>'form-control-label'])}}
                                            {{Form::text('contact_number', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Website', ['for'=>'website','class'=>'form-control-label'])}}
                                            {{Form::text('website', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Youtube', ['for'=>'youtube_url','class'=>'form-control-label'])}}
                                            {{Form::text('youtube_url', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Instagram', ['for'=>'instagram_url','class'=>'form-control-label'])}}
                                            {{Form::text('instagram_url', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Facebook', ['for'=>'facebook_url','class'=>'form-control-label'])}}
                                            {{Form::text('facebook_url', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                          {{ Form::label('title', 'Additional Information', ['for'=>'additional_info','class'=>'form-control-label'])}}
                                            {{Form::textarea('additional_info', null, ['class'=>'form-control'])}}
                                        </div>
                                        <div class="form-group">
                                        {{Form::hidden('approved', 1, [])}}
                                        {!!Form::submit('Approve', array('class' => 'submit btn btn-primary btn-block'))!!}
                                        </div>
                                      {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Company</strong>
                                        <small> Form</small>
                                    </div>
                                    <div class="card-body card-block">
                                        <div class="row">
                                        @foreach($projects as $project)
                                          @foreach($project->photos as $photo)
                                          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                              <a class="fancybox" rel="ligthbox">
                                                  <img  src="{{$photo->path}}" class="zoom img-fluid"  alt="">
                                                 
                                              </a>
                                          </div>
                                          @endforeach
                                        @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Onlineweddingmart. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

    </div>

@endsection

@section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
      $(document).ready(function(){
        $(".fancybox").fancybox({
              openEffect: "none",
              closeEffect: "none"
          });
          
          $(".zoom").hover(function(){
          
          $(this).addClass('transition');
        }, function(){
              
          $(this).removeClass('transition');
        });
      });
    </script>
@endsection