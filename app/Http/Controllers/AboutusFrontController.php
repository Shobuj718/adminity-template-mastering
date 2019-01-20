<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusFrontController extends Controller
{
    public function tnomessage()
    {
    	return view('front.pages.aboutus.tnomessage');
    }
    public function presidentmessage()
    {
    	return view('front.pages.aboutus.presidentmessage');
    }
    public function principalmessage()
    {
    	return view('front.pages.aboutus.principalmessage');
    }
    public function viceprincipalmessage()
    {
    	return view('front.pages.aboutus.viceprincipalmessage');
    }
    public function history()
    {
    	return view('front.pages.aboutus.history');
    }
    public function founder()
    {
    	return view('front.pages.aboutus.founder');
    }
    public function schoollaw()
    {
    	return view('front.pages.aboutus.schoollaw');
    }
    public function goalpurpose()
    {
    	return view('front.pages.aboutus.goalpurpose');
    }
    public function achievment()
    {
    	return view('front.pages.aboutus.achievment');
    }
    public function infrastructure()
    {
    	return view('front.pages.aboutus.infrastructure');
    }
}
