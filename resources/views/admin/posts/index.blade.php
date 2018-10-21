@extends('template')

@section('title','All Post | OWM')

@section('content')

	@include('partials.adminnav')

        <div class="page-content--bgf7 mt-2">

            <section class="p-t-60 p-b-20">
                <div class="container">
                <div class="row justify-content-end">
                	<h3 class="title-5 m-b-35 text-right">All Posts</h3>
                	<div class="col-md-3 m-b-10">
                		<a href="{{route('posts.create')}}" class="btn btn-block btn-primary">Create New Post</a>
                	</div>
                </div>
                	<div class="row">
                	<div class="col-md-12">
                		<div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Category</th>
                                                <th>URL</th>
                                                <th>Body</th>
                                                <th>Date Created</th>
                                                <th>published</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	@foreach($posts as $post)
                                            <tr>
                                                <td>{{$post->title}}</td>
                                                <td>{{$post->category->name}}</td>
                                                <td>{{$post->slug}}</td>
                                                <td>{!!substr($post->body, 0,56)!!}</td>
                                                <td>{{date('F j, Y',strtotime($post->created_at))}}</td>
                                                <td class="process">{{$post->status}}</td>
                                                <td>
                                                <div class="table-data-feature">
                                                    <a class="item" href="{{route('posts.show',$post->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View">
                                                        <i class="zmdi zmdi-mail-send"></i>
                                                    </a>
                                                    <a  href="{{route('posts.edit',$post->id)}}" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="zmdi zmdi-edit"></i>
                                                    </a>
                                                    {{Form::open(['route'=>['posts.destroy',$post->id],'method'=>'delete','id'=>'deletepost'])}}
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="zmdi zmdi-delete"></i>
                                                    </button>
                                                	{{Form::close()}}
                                                	{{Form::open(['route'=>['posts.publish',$post->id],'method'=>'post','id'=>'publishpost'])}}
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Publish">
													  <i class="zmdi zmdi-spellcheck"></i>
													</button>
                                                	{{Form::close()}}
                                                	{{Form::open(['route'=>['posts.redact',$post->id],'method'=>'post','id'=>'redactpost'])}}
                                                    <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Redact">
                                                        <i class="zmdi zmdi-long-arrow-return"></i>
                                                    </button>
                                                	{{Form::close()}}
                                                </div>
                                            </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                    </div>
                </div>
            </section>

            @include('partials.adminfooter')

        </div>

    </div>
@endsection