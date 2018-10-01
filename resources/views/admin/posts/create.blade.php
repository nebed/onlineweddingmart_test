@extends('template')

@section('title','Create Post | OWM')

@section('stylesheet')
    {!! Html::style('vendor/select2/select2.min.css') !!}
    {!! Html::script('vendor/tinymce/tinymce.min.js')!!}
    <script>
    var editor_config = {
        path_absolute : "{{ URL::to('/') }}/",
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
            if (type == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }
            tinyMCE.activeEditor.windowManager.open({
                file : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no"
            });
        }
    };
  tinymce.init(editor_config);</script>
@endsection

@section('content')

	@include('partials.adminnav')

        <div class="page-content--bgf7 mt-2">

            <section class="p-t-60 p-b-20">
                <div class="container">
                	<div class="row">
	                	</div class="col-md-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <strong>Create</strong>
	                                        <small> Post</small>
	                                    </div>
	                                    <div class="card-body card-block">
	                                    	{!! Form::open(['route' => 'posts.store', 'files'=>true]) !!}
	                                    	<div class="form-group">
	                                    	{{Form::label('title','Title:',['class'=>'form-control-label','for'=>'title'])}}
											{{Form::text('title',null,array('class'=>'form-control','required' => 'yes'))}}
											</div>
											<div class="form-group">
											{{Form::label('slug','URL:',['class'=>'form-control-label','for'=>'slug'])}}
											{{Form::text('slug',null,array('class'=>'form-control','required' => 'yes','min-length'=>'5', 'max-length'=>'70'))}}
											</div>
											<div class="form-group">
									          {{ Form::label('category_id','Category:',['class'=>'form-control-label','for'=>'category_id']) }}
									          <select class="form-control" name="category_id">
									            
									            @foreach($categories as $category)
									            <option value='{{$category->id}}'>{{$category->name}}</option>
									            @endforeach

									          </select>
									      	</div>
									      	<div class="form-group">
									          {{ Form::label('featured_image','Upload Featured Image:',['class'=>'form-control-label','for'=>'featured_image']) }}
									          {{ Form::file('featured_image') }}
									        </div>
									        <div class="form-group">
	                                        {{Form::label('body','Post Body:')}}
											{{Form::textarea('body',null,array('class'=>'form-control'))}}
											</div>
											<div class="form-group">
											{{Form::submit('Create Post',array('class'=>'btn btn-info btn-lg btn-block','style'=>'margin-top:20px;'))}}
											</div>
											{!! Form::close() !!}
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