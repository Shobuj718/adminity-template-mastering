<?php

namespace App\Http\Controllers;

use App\Founder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class FounderController extends Controller
{
	protected $image;

    public function index()
	{
		$founder = Founder::all();
		return view('admin.pages.aboutus.founder.all', compact('founder'));
	}

    
    public function add()
    {
    	return view('admin.pages.aboutus.founder.add');
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
            Founder::create($data);        	
    		
    		Session::Flash('success', 'Founder successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$founder = DB::table('founders')->where('id', $id)->first();

    	return view('admin.pages.aboutus.founder.edit', compact('founder'));
    }

    public function update(Request $request, $id)
    {

    	$data=Founder::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'Founder successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $founder = Founder::find($id);

        if(file_exists($founder->image)){
            unlink($founder->image);
            $founder->delete();
        }else{
            $founder->delete();
        }

        Session::Flash('error', 'Founder Deleted Successfully !!!');
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
            $uploadPath = 'uploads/founder/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
