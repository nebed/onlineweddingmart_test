@extends('baseprofile')
@section('stylesheet')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="/css/photos.css">
@endsection
@section('content')
    <div class="container-fluid m-3">
        <div class="col-md-9 mx-auto">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="card text-white bg1" style="min-width: 18rem;">
                      <div class="card-header">
                        <h5>Profile</h5>
                      </div>
                      <div class="card-body text-center">
                        <a href="{{route('vendor.profile')}}"><strong class="card-text">Information</strong></a><hr>
                        <a href="{{route('vendor.projects')}}"><strong class="card-text">Projects</strong></a><hr>
                        <a href="{{route('vendor.reviews')}}"><strong class="card-text">Reviews</strong></a><hr>
                      </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card block">
                      <div class="card-header text-white bg1">
                       <h5>Project: <strong>{{$project->name}}</strong></h5>
                      </div>
                      <div class="card-body text-center">
                        <div class="row">
                          @foreach($project->photos as $photo)
                          <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                              <a href="{{$photo->path}}" class="fancybox" rel="ligthbox">
                                  <img  src="{{$photo->path}}" class="zoom img-fluid"  alt="">
                                 
                              </a>
                          </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- <div class="col-md-6 mx-auto">
            <div class="row">

            </div>
        </div> -->
    </div>
    @endsection

    @section('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script>
   var route_prefix = "http://localhost:8000/laravel-filemanager";
  </script>
    <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
  </script>
    <script>
         $('#lfm').filemanager('image', {prefix: route_prefix});
         $('#lfmvideo').filemanager('video', {prefix: route_prefix});
    </script>
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
