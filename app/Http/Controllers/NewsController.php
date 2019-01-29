<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class NewsController extends Controller
{

	public function index()
	{
		$notice = News::all();
		return view('admin.pages.information.news.all', compact('notice'));
	}

    
    public function add()
    {
    	return view('admin.pages.information.news.add');
    }

    public function store(Request $request)
    {
    	//dd($request->all());

    	$this->validation($request);
    	$this->imageProcess($request);

    	try {

        	$data = $request->except('image');
            $data['image'] = $this->image;
            News::create($data);        	
    		
    		Session::Flash('success', 'Notice successfully added ');
    		return redirect()->back();

    		
    	} catch (\Exception $e) {    		
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function edit($id)
    {

    	$news = DB::table('news')->where('id', $id)->first();

    	return view('admin.pages.information.news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {

    	$data=News::where('id',$id)->first(); 
    	
	    
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
	    Session::Flash('success', 'Notice successfully updated ');
    	return redirect()->back();
    	
    	    	
    }

    public function delete($id)
    {

        $news = News::find($id);

        if(file_exists($news->image)){
            unlink($news->image);
            $news->delete();
        }else{
            $news->delete();
        }

        Session::Flash('error', 'Notice Deleted Successfully !!!');
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
            $uploadPath = 'uploads/notice/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
