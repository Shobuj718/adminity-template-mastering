<?php

namespace App\Http\Controllers;

use App\Physicalinfra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PhysicalInfrustructure extends Controller
{
    public function index()
    {
    	$physicalinfra = Physicalinfra::all();
    	return view('admin.pages.aboutus.physicalinfra.all', compact('physicalinfra'));
    }

    public function add()
    {
    	return view('admin.pages.aboutus.physicalinfra.add');
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
            Physicalinfra::create($data);        	
    		
    		Session::Flash('success', 'Physical Infrastructere successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$physicalinfra = DB::table('physicalinfras')->where('id', $id)->first();

    	return view('admin.pages.aboutus.physicalinfra.edit', compact('physicalinfra'));
    }

    public function update(Request $request, $id)
    {

    	$data=Physicalinfra::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'Physical Infrastructere successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $founder = Physicalinfra::find($id);

        if(file_exists($founder->image)){
            unlink($founder->image);
            $founder->delete();
        }else{
            $founder->delete();
        }

        Session::Flash('error', 'Physical Infrastructere Deleted Successfully !!!');
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
            $uploadPath = 'uploads/physical_infra/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
