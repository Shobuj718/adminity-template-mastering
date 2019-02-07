<?php

namespace App\Http\Controllers;

use App\Event;
use App\Volunteer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class VolunteerController extends Controller
{
    public function index()
	{
		//$volunteer = Volunteer::all();
		$volunteer = DB::table('volunteers')
				->join('events', 'volunteers.event_id', '=', 'events.id')
				->select('volunteers.*', 'events.category')
				->get();
		return view('admin.pages.volunteer.all', compact('volunteer'));

	}

    public function add()
    {
    	$event = DB::table('events')->get();
				
    	return view('admin.pages.volunteer.add', compact('event'));
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);
    	$this->imageProcess($request);

    	try {

    		$data = $request->except('image');
    		$data['image'] = $this->image;
    		Volunteer::create($data);

    		Session::Flash('success', 'Volunteer Successfully Added ');
    		return redirect('/volunteer/all');
    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {   
        $events = Event::all();
    	$volunteer = Volunteer::where('id',$id)->first();
    	return view('admin.pages.volunteer.edit', compact('volunteer', 'events'));
    }

    public function update(Request $request, $id)
    {

    	//dd($request->all());
    	$data = Volunteer::where('id', $id)->first();
    	$this->validation($request);

    	try {

    		if($request->hasFile('image')){
    			if(file_exists($data->image)){
    				unlink($data->image);
    			}
    			$this->imageProcess($request);
    			$data->update($request->all());

    			$data['image'] = $this->image;
    			$data->update();
    		}
    		else{
    			$data->update($request->all());
    		}

    		Session::Flash('success', 'Volunteer Successfully Updated ');
    		return redirect()->back();
    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	Volunteer::where('id',$id)->first()->delete();	
    	
    	Session::Flash('success', 'Volunteer Successfully Deleted ');
    	return redirect()->back();
    }

    public function validation(Request $data)
    {
    	$this->validate($data, [
    			'name' => 'required',
    			'details' => 'string',
    			'event_id' => 'integer',
    			'event_date' => 'date',
    			'image'    => 'image|mimes:jpg,jpeg,png,svg,pdf,gif|max:2048'
    		]);
    }

    public function imageProcess(Request $data, $name = null)
    {
    	$this->image = null;
    	if($imageFile = $data->file('image')){
    		$imageOriginalName = $imageFile->getClientOriginalName();
    		$explodeName = explode(',', $imageOriginalName);
    		$extensionName = end($explodeName);
    		$imageName = ($name ? $name : $data->name);
    		$uploadName = $imageName.'-'.time().'.'.$extensionName;
    		$uploadPath = 'uploads/volunteer/';

    		$imageFile->move($uploadPath, $uploadName);
    		$this->image = $uploadPath.$uploadName;
    		return true;
    	}
    	return false;
    }
}
