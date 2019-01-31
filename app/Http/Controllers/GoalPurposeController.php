<?php

namespace App\Http\Controllers;

use App\Goalpurpose;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class GoalPurposeController extends Controller
{
    public function index()
    {
    	$goalpurpose = Goalpurpose::all();
    	return view('admin.pages.aboutus.goalpurpose.all', compact('goalpurpose'));
    }

    public function add()
    {
    	return view('admin.pages.aboutus.goalpurpose.add');
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
            Goalpurpose::create($data);        	
    		
    		Session::Flash('success', 'Goal and Purpose successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$goalpurpose = DB::table('goalpurposes')->where('id', $id)->first();

    	return view('admin.pages.aboutus.goalpurpose.edit', compact('goalpurpose'));
    }

    public function update(Request $request, $id)
    {

    	$data=Goalpurpose::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'Goal And Purpose successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $founder = Goalpurpose::find($id);

        if(file_exists($founder->image)){
            unlink($founder->image);
            $founder->delete();
        }else{
            $founder->delete();
        }

        Session::Flash('error', 'Goal And Purpose Deleted Successfully !!!');
        return redirect()->back();
    }


    public function validation(Request $data)
    {
    	$this->validate($data,[
    		'name' => 'required',
    		'image' => 'image|mimes:jpg,jpeg,png,gif,pdf,svg|max:2048'
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
            $uploadPath = 'uploads/goalpurpose/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
