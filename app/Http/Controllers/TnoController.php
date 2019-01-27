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
        //$tno = TNO::all()->get();
        $tno = $this->getTnoInfo();

        return view('admin.pages.aboutus.tno.all', compact('tno'));
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
        //dd($request);

        $this->validation($request);
        $this->imageProcess($request);

        try {

            DB::beginTransaction();
            $data = $request->except('password');
            $data['password'] = bcrypt($request->password);
            $user = User::create($data);
            $data['user_id'] = $user->id;
            $data['image'] = $this->image;
            TNO::create($data);
            DB::commit();

            Session::Flash('success', "TNO Message Successfully Added ");
            return redirect()->back();
            
        } catch (\Exception $e){
            DB::rollback();
            if (file_exists($this->image)) {
                unlink($this->image);
            }
            Session::Flash('error', 'Something went wrong !!!'.$e->getMessage());
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
    public function edit(TNO $tno)
    {
        $tno = TNO::find($tno->id);
        /*echo "<pre>";
        print_r($tno);
        die();*/
        return view('admin.pages.aboutus.tno.edit', compact('tno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TNO $tno)
    {
        //dd($request->all());

        try {

            $data = $request->all();

            $user = User::find($tno->user_id);
            $user->update($data);
            $imageNameFind = TNO::find($tno->id);

            if($this->imageProcess($request, $user->name)){
                if(file_exists($imageNameFind->image)){
                    unlink($imageNameFind->image);
                }
                $data['image'] = $this->image;
            }
            $tno->update($data);

            Session::Flash('success', 'Tno info Updated Successfully ');
            return redirect()->back();
            
        } catch (\Exception $e) {
            Session::Flash('error', 'Something went wrong !!!'.$e->getMessage());
            return redirect()->back();
        }


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
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'password' => 'required|min:6',
            'message' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
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
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }

    public function emailcheck(Request $request)
    {
        $email = $request->all()['email'];
        $data = User::where('email', $email)->get();
        if($data->count()){
            return 1;
        }
        return 0;
    }

    public function getTnoInfo()
    {
        return DB::table('users')
                ->join('t_n_o_s', 'users.id', '=', 't_n_o_s.user_id')
                ->orderBy('t_n_o_s.id', 'desc')
                ->get(array(
                    't_n_o_s.id',
                    'users.name',
                    'users.email',
                    'users.mobile',
                    't_n_o_s.message',
                    't_n_o_s.image',
                    ));
    }
}
