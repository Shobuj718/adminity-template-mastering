<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function tno()
    {
    	return view('admin.pages.aboutus.tno.add');
    } 

    public function president()
    {
    	return view('admin.pages.aboutus.president');
    }

    public function principal()
    {
    	return view('admin.pages.aboutus.principal');
    }
}
