<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('front.pages.contact.contact');
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);

    	
    	Contact::create($request->all());

    	$data = array(
                'name' => $request->name,
            );
    	

    	Mail::send('front.pages.contact.welcome', $data, function ($message) {

    	    $message->from('shobujsa93@gmail.com', 'Shobuj');

    	    $message->to('shobujsa93@gmail.com')->subject('Testing Email send by gmail');

    	});

    	Session::Flash('success', 'Message Successfully sent ');
    	return redirect()->back();
    }

    public function validation(Request $data)
    {
    	$this->validate($data,[
    		'name'    => 'required|min:3',
			'email'   => 'email|required',
			'message' => 'required|min:10'
    		]);
    }
}
