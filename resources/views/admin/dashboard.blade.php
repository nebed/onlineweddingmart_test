@extends('template')

@section('title', 'Admin Dashboard | OWM')

@section('content')
    
        @include('partials.adminnav')
        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Dashboard</li>
                                    </ul>
                                </div>
                                <form class="au-form-icon--sm" action="" method="post">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
                                    <button class="au-btn--submit2" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END BREADCRUMB-->

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>{{Auth::user()->name}}!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->

            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number">{{$vendors->count()}} </h2>
                                <span class="desc">Registered vendors</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number">{{$customers->count()}} </h2>
                                <span class="desc">Registered Customers</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number">1,086</h2>
                                <span class="desc">this week</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number">$1,060,386</h2>
                                <span class="desc">total earnings</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-money"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Vendors</h3>
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </th>
                                            <th>name</th>
                                            <th>email</th>
                                            <th>brand name</th>
                                            <th>location</th>
                                            <th>contact number</th>
                                            <th>approval status</th>
                                            <th>date</th>
                                            <th>price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($vendors as $vendors)
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td>{{$vendors->name}}</td>
                                            <td>
                                                <span class="block-email">{{$vendors->email}}</span>
                                            </td>
                                            <td class="desc">{{$vendors->brand_name}}</td>
                                            <td>{{$vendors->location->name}}</td>
                                            <td>{{$vendors->contact_number}}</td>
                                            <td>
                                                <span class="status--process">{{ $vendors->approved == 1 ? 'Approved' : 'Not Approved'}}</span>
                                            </td>
                                            <td>{{date('F j, Y g:ia',strtotime($vendors->created_at))}}</td>
                                            <td>{{$vendors->price}}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <a class="item" href="{{route('vendors.show',$vendors->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </a>
                                                	<form>
                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                	</form>
                                                	<form id="deletevendor" action="{{route('vendors.destroy',$vendors->id)}}" method="DELETE">
                                                    <a onclick="document.getElementById('deletevendor').submit();" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </a>
                                                	</form>
                                                	<form>
                                                    <a class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="More">
                                                        <i class="zmdi zmdi-more"></i>
                                                    </a>
                                                	</form>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            @include('partials.adminfooter')

        </div>

    </div>
@endsection