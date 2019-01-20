<?php

namespace App\Http\Controllers;

use App\Ataglance;
use Illuminate\Http\Request;

class EventFrontController extends Controller
{
    public function yellow()
    {
    	$yellow = Ataglance::all();

    	return view('front.pages.event.yellow');
    }
    public function scout()
    {
    	return view('front.pages.event.scout');
    }
    public function girlsGuide()
    {
    	return view('front.pages.event.girlsGuide');
    }
    public function redCresent()
    {
    	return view('front.pages.event.redCresent');
    }
    public function display()
    {
    	return view('front.pages.event.display');
    }

    public function volunteer()
    {
    	return view('front.pages.event.volunteer');
    }
    public function annualMilad()
    {
    	return view('front.pages.event.annualMilad');
    }
    public function studentParlament()
    {
    	return view('front.pages.event.studentParlament');
    }
    public function sportsCompetition()
    {
    	return view('front.pages.event.sportsCompetition');
    }
    public function culturalProgram()
    {
    	return view('front.pages.event.culturalProgram');
    }
    
}
