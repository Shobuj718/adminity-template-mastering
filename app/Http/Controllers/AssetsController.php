<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AssetsController extends Controller
{
    public function index()
	{
		$assets = Asset::all();
		return view('admin.pages.ataglance.assets.all', compact('assets'));

	}

    public function add()
    {
    	return view('admin.pages.ataglance.assets.add');
    }

    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);
    	$this->imageProcess($request);

    	try {

    		$data = $request->except('image');
    		$data['image'] = $this->image;
    		Asset::create($data);

    		Session::Flash('success', 'Asset Successfully Added ');
    		return redirect()->back();
    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {
    	$assets = Asset::where('id', $id)->first();
    	return view('admin.pages.ataglance.assets.edit', compact('assets'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());
    	$data = Asset::where('id',$id)->first();
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

    		Session::Flash('success', 'Asset Successfully Updated ');
    		return redirect()->back();
    		
    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	Asset::where('id', $id)->first()->delete();	
    	
    	Session::Flash('success', 'Asset Successfully Deleted ');
    	return redirect()->back();
    }

    public function validation(Request $data)
    {
    	$this->validate($data, [
    			'assets' => 'required',
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
    		$uploadPath = 'uploads/assets/';

    		$imageFile->move($uploadPath, $uploadName);
    		$this->image = $uploadPath.$uploadName;
    		return true;
    	}
    	return false;
    }
}