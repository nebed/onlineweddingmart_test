<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Vendor;
use App\ProjectSlug;
use App\Photo;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project;
        $this->validate($request,array(
            'project_name' => 'required',
            'imagepath' => 'required',
        ));
        $imagepaths = explode(',', $request->imagepath);
        $slug = (new ProjectSlug)->createSlug($request->project_name);
        $project->name = $request->project_name;
        $project->vendor_id = auth('vendor')->id();
        $project->slug = $slug;
        $project->save();
        foreach($imagepaths as $imagepath)
        {
            Photo::create(['path' => $imagepath, 
                           'project_id'=> $project->id, 
                        ]);
            
        }
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug',$slug)->where('vendor_id',auth('vendor')->id())->first();
        return view('projects.single')->withProject($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
