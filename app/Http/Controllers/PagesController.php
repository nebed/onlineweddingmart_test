<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;
use App\Location;


class PagesController extends Controller {
	public function getIndex(){

		$services = Service::all();
		$locations = Location::all();
		return view('pages.index')->withServices($services)->withLocations($locations);
	}
	
	
	
}

