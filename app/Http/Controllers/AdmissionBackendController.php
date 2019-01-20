<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionBackendController extends Controller
{
    public function applyOnline()
    {
    	return view('admin.pages.admission.applyOnline');
    }
}
