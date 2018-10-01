@extends('template')

@section('title', 'Admin Dashboard | OWM')

@section('stylesheet')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="/css/photos.css">
@endsection

@section('content')

    @include('partials.adminnav')

        <div class="page-content--bgf7 mt-2">

            <section class="p-t-60 p-b-20">
                <div class="container">
                <div class="row">
                    <h3 class="title-5 m-b-35">Vendor</h3>
                <div class="col-md-10">
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
                        </div>

                            <div class="row">
                            <div class="col-md-10">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Photos</strong>
                                        <small></small>
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

            @include('partials.adminfooter')
            
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