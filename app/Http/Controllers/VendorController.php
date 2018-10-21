<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\Service;
use App\Location;
use App\Project;

class VendorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:vendor');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $vendor = Vendor::find(auth()->id());
        $this->validate($request, array(
                        'email' => 'required|email|max:250',
                        'brand_name' => 'required',
                        'service_id' => 'required',
                        'location_id' => 'required',
                        'contact_person' => 'max:250',
                        'contact_number' => 'string|max:12',
                        'website' => 'url',
                        'youtube_url' => 'url',
                        'instagram_url' => 'url',
                        'facebook_url' => 'url',
                        'additional_info' => 'max:1000',
        ));

        $vendor->email = $request->input('email');
        $vendor->brand_name = $request->input('brand_name');
        $vendor->service_id = $request->input('service_id');
        $vendor->location_id = $request->input('location_id');
        $vendor->contact_person = $request->input('contact_person');
        $vendor->contact_number = $request->input('contact_number');
        $vendor->website = $request->input('website');
        $vendor->youtube_url = $request->input('youtube_url');
        $vendor->instagram_url = $request->input('instagram_url');
        $vendor->facebook_url = $request->input('facebook_url');
        $vendor->additional_info = $request->input('additional_info');
        $vendor->save();
        return redirect()->route('vendor.profile');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getProjects()
    {
        $projects = Project::where('vendor_id',auth('vendor')->id())->get();
        return view('vendors.projects')->withProjects($projects);
    }

    public function getProfile()
    {
        $services = Service::all();
        $locations = Location::all();
        $serv=[];
        foreach ($services as $service){
            $serv[$service->id]=$service->name;
        }
        $loc=[];
        foreach ($locations as $location){
            $loc[$location->id]=$location->name;
        }
        $vendor = Vendor::findOrFail(auth('vendor')->id());
        $countempty = 0;
        $countall = 0;
        foreach($vendor->getAttributes() as &$attr){
            ++$countall;
            if(is_null($attr)){
                ++$countempty;
            }
        }
        $completepercent = (1- ($countempty/$countall)) * 100;
        return view('vendors.profile')->withVendor($vendor)->withLocations($loc)->withServices($serv)->withCompletepercent($completepercent);
    }
}
