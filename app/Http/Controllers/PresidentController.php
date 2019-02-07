<?php

namespace App\Http\Controllers;

use App\President;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PresidentController extends Controller
{
    public function index()
    {
    	$president = President::all();
    	return view('admin.pages.aboutus.presidentMessage.all', compact('president'));
    }

    public function add()
    {
    	return view('admin.pages.aboutus.presidentMessage.add');
    }

     public function show($id)
    {
        $president = DB::table('presidents')->where('id', $id)->first();

        return view('admin.pages.aboutus.presidentMessage.show', compact('president'));
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
            President::create($data);        	
    		
    		Session::Flash('success', 'President Message successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$president = DB::table('presidents')->where('id', $id)->first();

    	return view('admin.pages.aboutus.presidentMessage.edit', compact('president'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());

    	$data=President::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'President Message Successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $founder = President::where('id',$id)->first()->delete();

        Session::Flash('error', 'Data Deleted Successfully !!!');
        return redirect()->back();
    }


    public function validation(Request $data)
    {
    	$this->validate($data,[
    		'name' => 'required',
            'mobile' => 'required',
            'message' => 'required',
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
            $uploadPath = 'uploads/president/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
