<?php

namespace App\Http\Controllers;

use App\Admission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AdmissionBackendController extends Controller
{

    public function admissionManagement()
    {
        $admission = Admission::all();
        return view('admin.pages.admission.applyOnline', compact('admission'));
    }


    public function show($id)
    {
        $admission = DB::table('admissions')->where('id', $id)->first();

        return view('admin.pages.admission.show', compact('admission'));
    }
    public function edit($id)
    {
        $admission = Admission::where('id', $id)->first();
        return view('admin.pages.admission.edit', compact('admission'));
    }
    public function update($id, $status)
    {
        if($status == 1){
            Admission::where('id', $id)->update(['status'=>0]);   
        }
        else{
            Admission::where('id', $id)->update(['status'=>1]);
        }
         
        Session::Flash('success', 'Status Change Success');
            return redirect()->back();

        
    }

    public function delete($id)
    {
        Admission::find($id)->delete();
        Session::Flash('error', 'Applicant student delete success ');
            return redirect()->back();
    }




    /*public function applyOnline()
    {
    	return view('admin.pages.admission.applyOnline');
    }*/
    public function showDetails(Request $request)
    {
    	//dd($request->all());
    	$data = $request->all();
    	return view('admin.pages.admission.showDetails', compact('data'));
    }
    public function admissionRegister(Request $request)
    {
    	//dd($request->all());
    	$data = $request->all();
    	return view('admin.pages.admission.showDetails', compact('data'));
    }


}
