@extends('main')

@section('title', 'Profile | OWM')

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
                       <h5>Projects</h5>
                      </div>
                      <div class="card-body text-center">
                        <h5>Add Project to Portfolio</h5>
                        {!!Form::open(['route'=>'projects.create', 'method' => 'post'])!!}
                        <div class="input-group row mb-1">
                          <span class="input-group-btn">
                             <a class="btn bg1 text-white">
                              <i class="fa fa-picture-o"></i> Project Name  
                            </a>
                          </span>
                          {{Form::text('project_name',null,['class'=>'form-control'])}}
                        </div>
                        <div class="input-group row mb-1">
                          <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn bg1 hov-btn2 text-white">
                              <i class="fa fa-picture-o"></i> Choose Images
                            </a>
                          </span>
                          {{Form::text('imagepath',null,['id'=>'thumbnail','class'=>'form-control','type'=>'text','readonly'=>'readonly','placeholder'=>'you can select multiple images'])}}
                        </div>
                        <div class="input-group row mb-1">
                          <span class="input-group-btn">
                             <a class="btn bg1 text-white">
                              <i class="fa fa-picture-o"></i> Youtube Video  
                            </a>
                          </span>
                          {{Form::text('videopath',null,['class'=>'form-control'])}}
                        </div>
                        <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        <div class="input-group p-4">
                          {{Form::submit('Create Project',['class'=>'btn bg1 hov-btn2 btn-block text-white'])}}
                          {!!Form::close()!!}
                        </div>
                         <div class="row">
                        @foreach($projects as $project)
                          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
                          <a href="{{route('projects.view',$project->slug)}}" class="d-block mb-4 h-100">
                          <img class="img-fluid img-thumbnail" src="{{ $project->first_image['path'] }}" alt="">
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
    @endsection
