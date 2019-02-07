<?php

namespace App\Http\Controllers;

use App\Parentguideline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class ParentsGuidelineController extends Controller
{
    public function index()
	{
		$guideline = Parentguideline::all();
		return view('admin.pages.academic.parentguideline.all', compact('guideline'));
	}

    public function add()
    {
    	return view('admin.pages.academic.parentguideline.add');
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);
    	$this->imageProcess($request);

    	try {
    		$data = $request->except('image');
    		$data['image'] = $this->image;
    		Parentguideline::create($data);

    		Session::Flash('success', 'Data Successfully Added ');
    		return redirect()->back();

    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}

    }

    public function edit($id)
    {
    	$guideline = Parentguideline::find($id);
    	return view('admin.pages.academic.parentguideline.edit', compact('guideline'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());
    	$data = Parentguideline::find($id);
		$this->validation($request);

    	try {

    		if($request->hasFile('image')){
    			if(file_exists($data->image)){
    				unlink($data->image);
    			}
    			
    			$this->imageProcess($request);
    			$data->update($request->all());

    			$data->image = $this->image;
    			$data->update();
    		}
    		else{
    			$data->update($request->all());
    		}

    		Session::Flash('success', 'Data Successfully Updated ');
    		return redirect()->back();

    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	$data = Parentguideline::find($id);

    	if(file_exists($data->image)){
    		//unlink($data->image);
    		$data->delete();
    	}
    	else{
    		$data->delete();
    	}

    	Session::Flash('success', 'Data Successfully Deleted ');
    	return redirect()->back();
    }

    public function validation(Request $data)
    {
    	$this->validate($data,[
    			'guideline' => 'required',
    			'details'     => 'string',
    			'image'       => 'image|mimes:jpg,jpeg,png,gif,pdf,svg|max:2048'
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
    		$uploadPath = 'uploads/parentguideline/';

    		$imageFile->move($uploadPath,$uploadName);
    		$this->image = $uploadPath.$uploadName;
    		return true;

    	}
    	return false;
    }
}
