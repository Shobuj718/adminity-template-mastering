<?php

namespace App\Http\Controllers;

use App\Event;
use App\Eventinfo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class EventInfoController extends Controller
{
    public function index()
	{
		$event = Eventinfo::all();
		
		/*$event = DB::table('eventinfos')
				->join('events', 'eventinfos.event_cat_id', '=', 'events.id')
				->select('eventinfos.*', 'events.category')
				->get();*/

		return view('admin.pages.eventinfo.all', compact('event'));
	}

     public function add()
    {
    	$event = Event::all();
    	return view('admin.pages.eventinfo.add', compact('event'));
    }


    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);

    	$this->imageProcess($request);

    	try {

        	$data = $request->except('image');
            $data['image'] = $this->image;
            Eventinfo::create($data);        	
    		
    		Session::Flash('success', 'Data successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect('eventinfo/all');
    	}
    }

    public function edit($id)
    {
        $events = Event::all();
 		$event = Eventinfo::where('id',$id)->first();
    	return view('admin.pages.eventinfo.edit', compact('event','events'));
    }

    public function update(Request $request, $id)
    {
        ///dd($request->all());

    	$data=Eventinfo::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'Data successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $data = Eventinfo::where('id', $id)->first()->delete();

       /* if(file_exists($data->image)){
            unlink($data->image);
            $data->delete();
        }else{
            $data->delete();
        }*/

        Session::Flash('error', 'Data Deleted Successfully !!!');
        return redirect()->back();
    }

     public function validation(Request $data)
    {
    	$this->validate($data,[
    			'event_name'         => 'string|required',
    			'event_cat_id'     => 'integer|required',
    			'details'     => 'string|required',
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
            $uploadPath = 'uploads/event/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }

}
