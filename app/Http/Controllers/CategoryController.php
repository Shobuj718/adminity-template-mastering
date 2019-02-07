<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
	{
		$category = Category::all();
		return view('admin.pages.category.all', compact('category'));
	}

     public function add()
    {
    	return view('admin.pages.category.add');
    }


    public function store(Request $request)
    {
    	//dd($request->all());
    	$this->validation($request);

    	try {

    		Category::create($request->all());

    		Session::Flash('success', 'Category Successfully Added ');
    		return redirect()->back();

    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}

    }

    public function edit($id)
    {
    	$category = Category::where('id',$id)->first();
    	return view('admin.pages.category.edit', compact('category'));

    }

    public function update(Request $request, $id)
    {
    	//dd($request->all());
    	$data = Category::find($id);
		$this->validation($request);

    	try {
    			
			$data->update($request->all());

    		Session::Flash('success', 'Category Successfully Updated ');
    		return redirect()->back();

    	} catch (\Exception $e) {
    		Session::Flash('error', 'Something went wrong '.$e->getMessage());
    		return redirect()->back();
    	}
    }

    public function delete($id)
    {
    	Category::where('id', $id)->delete();

    	Session::Flash('success', 'Category Successfully Deleted ');
    	return redirect()->back();
    }

     public function validation(Request $data)
    {
    	$this->validate($data,[
    			'category'   => 'string|required',
    			'title'      => 'string|required',
    		]);
    }
}
