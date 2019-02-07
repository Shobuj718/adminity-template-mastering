<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
   
    public function index()
	{
		$event = Event::all();
		return view('admin.pages.event.all', compact('event'));
	}

     public function add()
    {
    	return view('admin.pages.event.add');
    }


    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);

    	try {

    		Event::create($request->all());

    		Session::Flash('success', 'Data Successfully Added ');
    		return redirect()->back();

    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}

    }

    public function edit($id)
    {
    	$event = Event::find($id);
    	return view('admin.pages.event.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());
    	$data = Event::find($id);
		$this->validation($request);

    	try {
    			
			$data->update($request->all());

    		Session::Flash('success', 'Data Successfully Updated ');
    		return redirect('/event/all');

    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	Event::find($id)->delete();

    	Session::Flash('success', 'Data Successfully Deleted ');
    	return redirect('/event/all');
    }

     public function validation(Request $data)
    {
    	$this->validate($data,[
    			'name'         => 'string|required',
    			'category'     => 'string|required',
    		]);
    }

}
