<?php

namespace App\Http\Controllers;

use App\Principal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PrincipalController extends Controller
{
    public function index()
    {
    	$principal = Principal::all();
    	return view('admin.pages.aboutus.principalMessage.all', compact('principal'));
    }

    public function add()
    {
    	return view('admin.pages.aboutus.principalMessage.add');
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
            Principal::create($data);        	
    		
    		Session::Flash('success', 'Principal Message successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$principal = DB::table('principals')->where('id', $id)->first();

    	return view('admin.pages.aboutus.principalMessage.edit', compact('principal'));
    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());

    	$data=Principal::where('id',$id)->first(); 
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
	    Session::Flash('success', 'Principal Message Successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        Principal::where('id',$id)->first()->delete();

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
            $uploadPath = 'uploads/principal/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
