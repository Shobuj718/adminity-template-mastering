<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{

	public function index()
	{
		$history = History::all();
		return view('admin.pages.aboutus.history.all', compact('history'));
	}

    public function add()
    {
    	return view('admin.pages.aboutus.history.add');
    }

    public function store(Request $request)
    {
    	//dd($request->all());

    	$this->validation($request);
    	$this->imageProcess($request);

    	try {

        	$data = $request->except('image');
            $data['image'] = $this->image;
            History::create($data);        	
    		
    		Session::Flash('success', 'History successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }
     public function edit($id)
    {

    	$history = DB::table('histories')->where('id', $id)->first();

    	return view('admin.pages.aboutus.history.edit', compact('history'));
    }

    public function update(Request $request, $id)
    {

    	$data=History::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'History successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $history = History::find($id);

        if(file_exists($history->image)){
            unlink($history->image);
            $history->delete();
        }else{
            $history->delete();
        }

        Session::Flash('error', 'History Deleted Successfully !!!');
        return redirect()->back();
    }


    public function validation(Request $data)
    {
    	$this->validate($data,[
    		'summary' => 'required',
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
            $uploadPath = 'uploads/history/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }

}
