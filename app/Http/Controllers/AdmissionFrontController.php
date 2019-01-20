<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
