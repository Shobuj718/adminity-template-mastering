<?php

namespace App\Http\Controllers;

use App\Facility;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FacilityController extends Controller
{

	public function index()
	{
		$facility = Facility::all();
		return view('admin.pages.information.facility.all', compact('facility'));

	}

    public function add()
    {
    	return view('admin.pages.information.facility.add');
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);
    	$this->imageProcess($request);

    	try {

    		$data = $request->except('image');
    		$data['image'] = $this->image;
    		Facility::create($data);

    		Session::Flash('success', 'Facility Successfully Added ');
    		return redirect()->back();
    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {
    	$facility = Facility::find($id);
    	return view('admin.pages.information.facility.edit', compact('facility'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());
    	$data = Facility::find($id);
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

    		Session::Flash('success', 'Facility Successfully Updated ');
    		return redirect()->back();
    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	Facility::find($id)->delete();	
    	
    	Session::Flash('success', 'Facility Successfully Deleted ');
    	return redirect()->back();
    }

    public function validation(Request $data)
    {
    	$this->validate($data, [
    			'facility' => 'required',
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
    		$uploadPath = 'uploads/facility/';

    		$imageFile->move($uploadPath, $uploadName);
    		$this->image = $uploadPath.$uploadName;
    		return true;
    	}
    	return false;
    }
}
