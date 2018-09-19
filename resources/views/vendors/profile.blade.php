<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
   {!! Html::style('/vendor/bootstrap/css/bootstrap.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/fonts/iconic/css/material-design-iconic-font.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/fonts/linearicons-v1.0.0/icon-font.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/animate/animate.css')!!}
<!--===============================================================================================-->  
   {!!Html::style('/vendor/css-hamburgers/hamburgers.min.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/vendor/animsition/css/animsition.min.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/select2/select2.min.css')!!}
<!--===============================================================================================-->  
   {!!Html::style('/vendor/daterangepicker/daterangepicker.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/vendor/slick/slick.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/MagnificPopup/magnific-popup.css')!!}
<!--===============================================================================================-->
   {!!Html::style('/vendor/perfect-scrollbar/perfect-scrollbar.css')!!}
<!--===============================================================================================-->
    {!!Html::style('/css/util.css')!!}
{!!Html::style('/css/main.css')!!}
<!--===============================================================================================-->
</head>
  <body class="animsition">
    
    <!-- Header -->
    <!-- Header -->
    <header class="header-v4">
        <!-- Header desktop -->
        <div class="container-menu-desktop">
            <div class="top-bar">
                <div class="content-topbar flex-sb-m h-full container">
                    <div class="left-top-bar">
                        onlineweddingmart.com | Weddings Made Easy
                    </div>

                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            Login
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            EN
                        </a>

                        <a href="#" class="flex-c-m trans-04 p-lr-25">
                            USD
                        </a>
                    </div>
                </div>
            </div>
            <div class="wrap-menu-desktop how-shadow1">
                <nav class="limiter-menu-desktop p-l-45">
                    
                    <!-- Logo desktop -->       
                    <a href="#" class="logo">
                        <img src="{{URL::asset('/images/icons/logo-02.png')}}" alt="IMG-LOGO">
                    </a>

                    <!-- Menu desktop -->
                    <div class="menu-desktop">
                        <ul class="main-menu">
                            <li>
                                <a href="index.html">Vendors</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Homepage 1</a></li>
                                    <li><a href="home-02.html">Homepage 2</a></li>
                                    <li><a href="home-03.html">Homepage 3</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="product.html">Real Wedding</a>
                            </li>

                            <li>
                                <a href="blog.html">Destination Wedding</a>
                            </li>

                            <li class="label1" data-label1="hot">
                                <a href="shoping-cart.html">Honey-Moon Package</a>
                            </li>

                            <li>
                                <a href="blog.html">Blog</a>
                            </li>

                            <li>
                                <a href="about.html">About</a>
                            </li>

                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </ul>
                    </div>  

                    <!-- Icon header -->
                    <div class="wrap-icon-header flex-w flex-r-m">                           
                        <div class="flex-c-m h-full p-r-25 bor6">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-22 p-r-11 icon-header-noti js-show-cart" data-notify="2">
                                <i class="zmdi zmdi-shopping-cart"></i>
                            </div>
                        </div>
                            
                        <div class="flex-c-m h-full p-lr-19">
                            <div class="icon-header-item cl0 hov-cl1 trans-04 p-lr-22 js-show-sidebar">
                                <i class="zmdi zmdi-menu"></i>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>  
        </div>

        <!-- Header Mobile -->
       <div class="wrap-header-mobile">
            <!-- Logo moblie -->        
            <div class="logo-mobile">
                <a href="index.html"><img src="{{URL::asset('/images/icons/logo-01.png')}}" alt="IMG-LOGO"></a>
            </div>

            <!-- Icon header -->
            <div class="wrap-icon-header flex-w flex-r-m m-r-15">
                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
                    <i class="zmdi zmdi-search"></i>
                </div>

                <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
                    <i class="zmdi zmdi-shopping-cart"></i>
                </div>

                <a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
                    <i class="zmdi zmdi-favorite-outline"></i>
                </a>
            </div>

            <!-- Button show menu -->
            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </div>
        </div>



        <!-- Menu Mobile -->
        <!-- Menu Mobile -->
        <div class="menu-mobile">
            <ul class="topbar-mobile">
                <li>
                    <div class="left-top-bar">
                        Free shipping for standard order over $100
                    </div>
                </li>

                <li>
                    <div class="right-top-bar flex-w h-full">
                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            Help & FAQs
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            My Account
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            EN
                        </a>

                        <a href="#" class="flex-c-m p-lr-10 trans-04">
                            USD
                        </a>
                    </div>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage 1</a></li>
                        <li><a href="home-02.html">Homepage 2</a></li>
                        <li><a href="home-03.html">Homepage 3</a></li>
                    </ul>
                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="product.html">Shop</a>
                </li>

                <li>
                    <a href="shoping-cart.html" class="label1 rs1" data-label1="hot">Features</a>
                </li>

                <li>
                    <a href="blog.html">Blog</a>
                </li>

                <li>
                    <a href="about.html">About</a>
                </li>

                <li>
                    <a href="contact.html">Contact</a>
                </li>
            </ul>
        </div>

        <!-- Modal Search -->
        <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
            <button class="flex-c-m btn-hide-modal-search trans-04">
                <i class="zmdi zmdi-close"></i>
            </button>

            <form class="container-search-header">
                <div class="wrap-search-header">
                    <input class="plh0" type="text" name="search" placeholder="Search...">

                    <button class="flex-c-m trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>
                </div>
            </form>
        </div>
    </header>

        <!--Profile Content -->
        <div class="container-fluid">
    <div class="row d-flex d-md-block flex-nowrap wrapper">
        <div class="col-md-3 float-left col-1 pl-0 pr-0 collapse width show" id="sidebar">
            <div class="list-group border-0 card text-center text-md-left">
                <a href="#menu1" class="list-group-item d-inline-block collapsed"><i class="fa fa-info"></i> <span class="d-none d-md-inline">Information</span> </a>
                <a href="#" class="list-group-item d-inline-block collapsed"><i class="fa fa-images"></i> <span class="d-none d-md-inline">Albums</span></a>
                <a href="#menu3" class="list-group-item d-inline-block collapsed"><i class="fa fa-star"></i> <span class="d-none d-md-inline">Reviews</span></a>
            </div>
        </div>
        <main class="col-md-9 float-left col px-5 pl-md-2 pt-2 main">
            <div class="row">
                <div class="col-md-2">
                    <a href="#" data-target="#sidebar" data-toggle="collapse"><i class="fa fa-navicon fa-2x py-2 p-1"></i></a>
                </div>
                <div class="col-md-10">
                        <div class="page-header">
                <h2>Profile</h2>
            </div>
            <p class="lead">A responsive, multi-level vertical accordion.</p>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <h3 class="mr-2">Personal Information</h3>
                    <br>
                        <form>
                    <div class="form-group row">
                      <label for="email" class="col-12 col-sm-3 col-form-label text-md-right">Login Email ID</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input id="email" type="text" readonly="readonly" value="Readonly input text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="brand_name" class="col-12 col-sm-3 col-form-label text-md-right">Brand Name</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input id="brand_name" type="text" readonly="readonly" value="Readonly input text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="service" class="col-12 col-sm-3 col-form-label text-md-right">Category</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input id="service" type="text" readonly="readonly" value="Readonly input text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="location" class="col-12 col-sm-3 col-form-label text-md-right">City</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input id="location" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="contact_person" class="col-12 col-sm-3 col-form-label text-md-right">Contact Person Name </label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input id="contact_person" type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-md-right">Contact Number</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input type="text" data-mask="phone-int" placeholder="+234 8103 999 999" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-md-right">Website</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-md-right">Youtube</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-md-right">Instagram</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-md-right">Facebook</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="additional_info" class="col-12 col-sm-3 col-form-label text-md-right">Additional Information</label>
                      <div class="col-12 col-sm-8 col-md-8">
                        <textarea id="additional_info" class="form-control"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
                
            </div>
        </main>
    </div>
</div>

 {!!Html::script('/vendor/jquery/jquery-3.2.1.min.js')!!}
{!!Html::script('/vendor/bootstrap/js/popper.js')!!}
  {!!Html::script('/vendor/bootstrap/js/bootstrap.min.js')!!}
  {!!Html::script('/vendor/animsition/js/animsition.min.js')!!}

<!--===============================================================================================-->
    {!!Html::script('/vendor/select2/select2.min.js')!!}
    {!!Html::script('/js/main.js')!!}
        
</body>
</html>