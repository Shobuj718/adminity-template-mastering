<?php

namespace App\Http\Controllers;


use App\Category;
use App\Importantlink;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ImportantLinkController extends Controller
{
	public function index()
	{
		//$subcategory = Subcategory::all();
		$importantlink = DB::table('categories')
                ->join('importantlinks', 'categories.id', '=', 'importantlinks.category_id')
                ->select('importantlinks.*', 'categories.category')
                ->get();
		
		return view('admin.pages.importantlink.all', compact('importantlink'));
	}

     public function add()
    {
    	$category = Category::all();
    	return view('admin.pages.importantlink.add', compact('category'));
    }


    public function store(Request $request)
    {
    	//dd($request->all());
        $this->validation($request);

        try {

            Importantlink::create($request->all());

            Session::Flash('success', 'Data Successfully Added ');
            return redirect()->back();

        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong '.$e->getMessage());
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $category = Category::all();
 		$importantlink = Importantlink::where('id',$id)->first();
    	return view('admin.pages.importantlink.edit', compact('category','importantlink'));
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $data = Importantlink::where('id', $id)->first();
        $this->validation($request);

        try {
                
            $data->update($request->all());

            Session::Flash('success', 'Data Successfully Updated ');
            return redirect()->back();

        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong '.$e->getMessage());
            return redirect()->back();
        }
    	
    	    	
    }

    public function delete($id)
    {

        Importantlink::find($id)->delete();

        Session::Flash('error', 'Data Deleted Successfully !!!');
        return redirect()->back();
    }

     public function validation(Request $data)
    {
    	$this->validate($data,[
    			'linkName'   => 'string|required',
    			'address'     => 'required',
    			'category_id'   => 'required',

    		]);
    }
}
