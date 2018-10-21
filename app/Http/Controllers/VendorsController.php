<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Service;
use App\Vendor;

class VendorsController extends Controller {
	
	public function __construct()
    {
        $this->middleware('web');
    }

    public function getIndex()
    {
        $services = Service::all();
        return view('vendors.index')->withServices($services);
    }

    public function getCategory($name)
    {
        $vendors = Service::where('slug',$name)->first()->vendors()->paginate(30);
        return view('vendors.category')->withVendors($vendors);
    }
	
}