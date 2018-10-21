@extends('main')

@section('title', 'Profile | OWM')

@section('stylesheet')
  {!! Html::style('/css/dashboard.css')!!}
@endsection

@section('content')
        <!--Profile Content -->
        <div class="container-fluid m-3">
            <div class="col-md-10 mx-auto">
            <div class="row">
                <nav class="col-md-3 mb-3">
                    <div class="card text-white bg1">
                      <div class="card-header">
                        <h5><i class="zmdi zmdi-account"></i>   Profile</h5>
                      </div>
                      <div class="card-body text-left">
                       <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                          <li class="nav-item">
                          <a style="color:#ffff;" class="nav-link active" href="{{route('vendor.profile')}}"><i class="zmdi zmdi-info"></i><strong class="card-text">    Information</strong></a>
                          </li>
                           <li class="nav-item">
                        <a style="color:#ffff;" class="nav-link" href="{{route('vendor.projects')}}"><i class="zmdi zmdi-collection-image-o"></i><strong class="card-text">    Projects</strong></a>
                        </li>
                        <li class="nav-item">
                        <a style="color:#ffff;" class="nav-link" href="{{route('vendor.reviews')}}"><i class="zmdi zmdi-star"></i><strong class="card-text">    Reviews</strong></a>
                        </li>
                        </ul>
                      </div>
                      </div>
                    </div>
                </nav>
                <main class="col-md-9">
                    @include('partials.messages')
                    <div class="card block p-b-10">
                      <div class="card-header text-white bg1">
                        <h5>Analytics</h5>
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 col-sm-4 col-xs-4 text-center" style="font-size: 1.2rem;padding: 6px;border: 1.5px solid; border-radius: 3px;"><p><h2>0</h2></p><p>Leads</p></div>
                          <div class="col-md-4 col-sm-4 col-xs-4 text-center" style="font-size: 1.2rem;padding: 6px;border: 1.5px solid; border-radius: 3px;"><p><h2>0</h2></p><p>Love Count</p></div>
                          <div class=" col-md-4 col-sm-4 col-xs-4 text-center" style="font-size: 1.2rem;padding: 6px;border: 1.5px solid; border-radius: 3px;"><p><h2>0</h2></p><p>Reviews</p></div>
                        </div>
                        <hr>
                        <div class="progress bg0" style="font-size: 1.2rem;height: 50px; padding: 6px;border: 1.5px solid rgba(242, 39, 106, 0.76); border-radius: 3px;"><div class="progress-bar progress-bar-striped active bg10" style="line-height: 2.5rem;height: 36px; width:{{$completepercent}}%;" role="progressbar" aria-valuenow="{{$completepercent}}" aria-valuemin="0" aria-valuemax="100">{{$completepercent}}% Complete</div></div>
                        <hr>
                        <div class="mt-3">
                          <h3 class=""> Complete your profile by:</h3>
                          <ul class="pl-5" style="font-size:1.1rem;">
                            <li>Filling in the details.</li>
                            <li>Linking your profile to your Facebook page/ website.</li>
                            <li>Get featured in a Real Wedding. Email your work to admin@onlineweddingmart.com.</li>
                            <li>Upload your first album to get visibility on our photo gallery and social media handles.</li>
                            <li>Invite clients to review your work.</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card block">
                      <div class="card-header text-white bg1">
                        <h5>Personal Information</h5>
                      </div>
                      <div class="card-body">
                        {!! Form::model($vendor, ['route'=>['vendor.update', $vendor->id], 'method' => 'PUT']) !!}

                    <div class="form-group">
                        {{ Form::label('title', 'Login Email ID:', ['for'=>'email','class'=>''])}}
                        {{Form::email('email', null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                    </div>
                    <div class="form-group">
                        {{ Form::label('title', 'Brand Name', ['for'=>'brand_name','class'=>''])}}
                        {{Form::text('brand_name', null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Category', ['for'=>'service_id','class'=>''])}}
                        {{Form::select('service_id',$services, null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'City', ['for'=>'location_id','class'=>''])}}
                        {{Form::select('location_id',$locations, null, ['class'=>'form-control','type'=>'text','readonly'=>'readonly'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Contact Person', ['for'=>'contact_person','class'=>''])}}
                        {{Form::text('contact_person', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                       {{ Form::label('title', 'Contact Number', ['for'=>'contact_number','class'=>''])}}
                        {{Form::text('contact_number', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Website', ['for'=>'website','class'=>''])}}
                        {{Form::text('website', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Youtube', ['for'=>'youtube_url','class'=>''])}}
                        {{Form::text('youtube_url', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Instagram', ['for'=>'instagram_url','class'=>''])}}
                        {{Form::text('instagram_url', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Facebook', ['for'=>'facebook_url','class'=>''])}}
                        {{Form::text('facebook_url', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                      {{ Form::label('title', 'Additional Information', ['for'=>'additional_info','class'=>''])}}
                        {{Form::textarea('additional_info', null, ['class'=>'form-control'])}}
                    </div>
                    <div class="form-group">
                        <p class="text-right">
                    {!!Form::submit('Save Changes', array('class' => 'submit stext-101 cl0 btn bg1 bor1 hov-btn2 p-lr-15 trans-04'))!!}
                  </p>
                  </div>
                  {!! Form::close() !!}
                      </div>
                    </div>
                </main>
            </div>
        </div>
</div>
@endsection
