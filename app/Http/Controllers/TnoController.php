<?php

namespace App\Http\Controllers;

use App\User;
use App\TNO;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class TnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.aboutus.tno.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);
        $this->imageProcess($request);

        try {
            $data = $request->except('password');
            $data['password'] = bcrypt($request->password);
            $data['image']    = $this->image;
            TNO::create($data);

            Session::flash('success', 'TNO Message Successfully Added ');
            return redirect()->back();
            
        } catch (\Exception $e) {
            Session::flash('error', 'Something went wrong, try again !!!'.$e->getMessage());
            return redirect()->back();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // input data validation
    public function validation(Request $data)
    {
        $this->validate($data, [
            'name'  => 'required|max:255',
            'email' => 'required|email',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2018'
            ]);
    }

    // image validation
    public function imageProcess(Request $data, $name = null)
    {
        $this->image = null;
        if($imageFile = $data->file('image')){
            $imageOriginalName = $imageFile->getClientOriginalName();
            $explodeName = explode(',', $imageOriginalName);
            $extensionName = end($explodeName);
            $tnoName = ($name ? $name : $data->name);
            $uploadName = $tnoName.'-'.time().'.'.$extensionName;

            $uploadPath = 'uploads/tnoImage/';

            $imageFile->move($uploadPath,$uploadName);
            $this->iamge = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
