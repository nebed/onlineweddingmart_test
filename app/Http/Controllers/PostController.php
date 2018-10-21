<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\PostSlug;
use Purifier;
use Image;
use Storage;
use Session;

class PostController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('admin.posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);  die and dump request information
        //validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'category_id'=>'required|integer',
            'body' => 'required',
            'image' => 'mimes:jpeg,gif,png,jpg'

        )); 

        //store in the database
        $post = new Post;
        $slug = (new PostSlug)->createSlug($request->title);
        $post->title = $request->title;
        $post->slug = $slug;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->body);

        //save featured image
        
            $file_uploaded = $request->image;
            $isImage = $file_uploaded->getClientOriginalExtension();
            $filename = $slug.'.'.$isImage;
            $location = public_path('images\\'.$filename);
            $thumb_location = public_path('images\\thumbs\\'.$filename);
            Image::make($file_uploaded)->fit(1200, 600, function ($constraint) { $constraint->upsize();})->save($location);
            Image::make($file_uploaded)->fit(900, 600, function ($constraint) { $constraint->upsize();})->save($thumb_location);
            $post->image = $filename;


        $post->save();

        //$post->tags()->sync($request->tags, false);

        Session::flash('success', 'The blog post was successfully saved!');
        //redirect to another page
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);
        return view('admin.posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function publish(Request $request, $id)
    {
        $post = Post::find($id);
        $post->status = 'PUBLISHED';
        $post->save();
        return redirect()->route('posts.index'); 
    }

     public function redact(Request $request, $id)
    {
        $post = Post::find($id);
        $post->status = 'PENDING';
        $post->save();
        return redirect()->route('posts.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $oldFilename = $post->image;
        Storage::delete($oldFilename);
        Storage::delete('thumbs\\'.$oldFilename);
        $post->delete();
        Session::flash('success', 'The post was successfully deleted');
        return redirect()->route('posts.index');
    }
}
