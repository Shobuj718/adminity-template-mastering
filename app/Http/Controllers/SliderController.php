<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function index()
    {
    	
    	$slider = Slider::all();
    	return view('admin.pages.slider.all', compact('slider'));
    }

    public function add()
    {
    	return view('admin.pages.slider.add');
    }

    public function store(Request $request)
    {
    	//dd($request->all());

    	$this->validation($request);

    	$this->imageProcess($request);

    	try {

        	$data = $request->except('image');
            $data['image'] = $this->image;
            //dd($data['image']);
            Slider::create($data);        	
    		
    		Session::Flash('success', 'Slider Image Successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$slider = DB::table('sliders')->where('id', $id)->first();

    	return view('admin.pages.slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());

    	$data=Slider::where('id',$id)->first(); 
    	$this->validation($request);
	    
	    if ($request->hasFile('image'))
	    {
            if(file_exists($data->image)){
                unlink($data->image);
            }
            $data->update($request->all());
            $this->imageProcess($request);
            $data->image = $this->image;
            $data->update();
                              
	    }  
        else{
            $data->update($request->all());
            $data->update();
        } 
	    Session::Flash('success', 'Slider Image Successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        Slider::where('id',$id)->first()->delete();

        Session::Flash('error', 'Slider Image Deleted Successfully !!!');
        return redirect()->back();
    }


    public function validation(Request $data)
    {
    	$this->validate($data,[
    		'title' => 'required',
    		'image' => 'required|image|mimes:jpg,jpeg,png,gif,pdf,svg|max:2048'
    		]);
    }

    public function imageProcess(Request $data, $name = null)
    {
        $this->image = null;
        if($imageFile = $data->file('image')){
            $imageOriginalName = $imageFile->getClientOriginalName();
            $explodeName = explode(',', $imageOriginalName);
            $extensionName = end($explodeName);
            $tnoName = ($name ? $name : $data->name);
            $uploadName = $tnoName.'-'.time().'.'.$extensionName;
            $uploadPath = 'uploads/slider/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
