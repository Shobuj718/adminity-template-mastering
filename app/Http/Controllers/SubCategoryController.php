<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    public function index()
	{
		$subcategory = Subcategory::all();
		
		
		return view('admin.pages.subcategory.all', compact('subcategory'));
	}

     public function add()
    {
    	$category = Category::all();
    	return view('admin.pages.subcategory.add', compact('category'));
    }


    public function store(Request $request)
    {
    	//dd($request->all());
        $this->validation($request);

        try {

            Subcategory::create($request->all());

            Session::Flash('success', 'Sub Category Successfully Added ');
            return redirect()->back();

        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong '.$e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $category = Category::all();
 		$event = Subcategory::where('id',$id)->first();
    	return view('admin.pages.subcategory.edit', compact('category','subcategory'));
    }

    public function update(Request $request, $id)
    {
        $data = Subcategory::where('id' $id)->first();
        $this->validation($request);

        try {
                
            $data->update($request->all());

            Session::Flash('success', 'Sub Category Successfully Updated ');
            return redirect()->back();

        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong '.$e->getMessage());
            return redirect()->back();
        }
    	
    	    	
    }

    public function delete($id)
    {

        $data = Subcategory::where('id', $id)->delete();

        Session::Flash('error', 'Data Deleted Successfully !!!');
        return redirect()->back();
    }

     public function validation(Request $data)
    {
    	$this->validate($data,[
    			'subcategory'   => 'string|required',
    			'category_id'   => 'required',
    			'sub_title'     => 'string|required',

    		]);
    }

    
}
