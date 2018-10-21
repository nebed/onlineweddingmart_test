@extends('main')

@section('title', 'Profile | OWM')

@section('content')
    <div class="container-fluid m-3">
        <div class="col-md-9 mx-auto">
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
                <div class="col-md-9">
                    <div class="card block">
                      <div class="card-header text-white bg1">
                       <h5>Projects</h5>
                      </div>
                      <div class="card-body">
                        {!!Form::open(['route'=>'projects.create', 'method' => 'post'])!!}
                        <!---New-->
                        <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right">Project Details</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                          {{Form::text('project_name',null,['class'=>'form-control','placeholder'=>'Project Name*'])}}
                        <div class=" mt-3 mb-3">
                          <div class="input-group-append be-addon">
                            <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn bg1 hov-btn2 text-white">
                              <i class="fa fa-picture-o"></i> Choose Images
                            </a>
                          </span>
                          </div>
                          {{Form::text('imagepath',null,['id'=>'thumbnail','class'=>'form-control','type'=>'text','readonly'=>'readonly','placeholder'=>'you can select multiple images'])}}
                        </div>
                          {{Form::text('videopath',null,['class'=>'form-control','placeholder'=>'Youtube Video URL'])}}
                      </div>
                    </div>
                     <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                        <div class="input-group p-4">
                          {{Form::submit('Create Project',['class'=>'btn bg1 hov-btn2 btn-block text-white mb-4'])}}
                          {!!Form::close()!!}
                        </div>
                        <!---End-->
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
   var route_prefix = "https://onlineweddingmart.com/laravel-filemanager";
  </script>
    <script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!}
  </script>
    <script>
         $('#lfm').filemanager('image', {prefix: route_prefix});
         $('#lfmvideo').filemanager('video', {prefix: route_prefix});
    </script>
    @endsection
