<?php

namespace App\Http\Controllers;

use App\Schoollaw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class SchoollawController extends Controller
{
    public function index()
    {
    	$schoollaw = Schoollaw::all();
    	return view('admin.pages.aboutus.schoollaw.all', compact('schoollaw'));
    }

    public function add()
    {
    	return view('admin.pages.aboutus.schoollaw.add');
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
            Schoollaw::create($data);        	
    		
    		Session::Flash('success', 'School law successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$schoollaw = DB::table('schoollaws')->where('id', $id)->first();

    	return view('admin.pages.aboutus.schoollaw.edit', compact('schoollaw'));
    }

    public function update(Request $request, $id)
    {

    	$data=Schoollaw::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'School law successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $founder = Schoollaw::find($id);

        if(file_exists($founder->image)){
            unlink($founder->image);
            $founder->delete();
        }else{
            $founder->delete();
        }

        Session::Flash('error', 'School law Deleted Successfully !!!');
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
            $uploadPath = 'uploads/schoollaw/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
