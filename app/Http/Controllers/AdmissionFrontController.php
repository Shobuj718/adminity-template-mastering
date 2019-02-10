<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdmissionFrontController extends Controller
{
    public function admissionNotice()
    {
    	return view('front.pages.admission.admissionNotice');
    }
    public function admissionGuideline()
    {
    	return view('front.pages.admission.admissionGuideline');
    }
    public function admissionResult()
    {
    	return view('front.pages.admission.admissionResult');
    }
    public function feesPayment()
    {
        return view('front.pages.admission.feesPayment');
    }
    public function onlineApply()
    {
        return view('front.pages.admission.onlineApply');
    }
    public function admission(Request $request)
    {
        //dd($request->all());

        $this->validation($request);

        $this->imageProcess($request);

        try {

            $data = $request->except('image');
            $data['image'] = $this->image;
            //dd($data['image']);
            $data= Admission::create($data);    
            //dd($data);
           /* $admission = $request->all();
            $request->put('admission', $admission); */       
           //Session::push('admission', $admission);     
            
            Session::Flash('success', 'Admission successfully ');
            return view('front.pages.admission.printApplyForm', compact('data'));

            
        } catch (\Exception $e) {           
            Session::Flash('error', 'Something went wrong '.$e->getMessage());
            return redirect()->back();
        }
    }

    /*public function printApplyForm($id)
    {
        $admission = Admission::find($id);
        return view('front.pages.admission.printApplyForm', compact('admission'));
    }*/

    public function validation(Request $data)
    {
        $this->validate($data,[
            'name' => 'required|min:3',
            'class' => 'required',
            'gender' => 'required',
            'religion' => 'required',
            'birthDate' => 'required',
            'mobile' => 'required',
            'father' => 'required',
            'father_occupation' => 'required',
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
            $uploadPath = 'uploads/admission/';

            $imageFile->move($uploadPath,$uploadName);
            $this->image = $uploadPath.$uploadName;
            return true;
        }
        return false;
    }
}
