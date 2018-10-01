<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VendorsController extends Controller {
	
	
    public function getIndex()
    {
        return view('vendors.index');
    }
	
}