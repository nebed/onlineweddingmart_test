<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Service;
use App\Location;
use Mail;
use Session;

class PagesController extends Controller {
	public function getIndex(){

		$services = Service::all();
		$locations = Location::all();
		return view('pages.index')->withServices($services)->withLocations($locations);
	}

	public function getAbout(){

		return view('pages.about');
	}
	
	public function getContact(){

		return view('pages.contact');
	}

	public function postContact(Request $request){

		$this->validate($request, [
			'email' => 'required|email|max:255',
			'message' => 'required|min:10',
            'subject' => 'required|min:5',
		]);
		$data = array(
			'email'=> $request->email,
			'subject'=> $request->subject,
			'bodyMessage'=> $request->message

		);

		Mail::send('emails.contact', $data, function($message) use($data){
			$message->from($data['email']);
			$message->to('admin@onlineweddingmart.com');
			$message->subject($data['subject']);

		});
		Session::flash('success','Your Email was Sent!');
		return redirect('/');

	}
	
	
}

