<?php

namespace App\Http\Controllers;

use App\Event;
use App\Eventinfo;
use App\Ataglance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventFrontController extends Controller
{
    public function yellow()
    {       
        $id = 1;
	    $data = DB::table('eventinfos')
            ->join('events', 'eventinfos.event_cat_id', '=', 'events.id')
            ->select('eventinfos.*', 'events.category')
            ->where('events.id', '=', $id)
            ->get();

    	return view('front.pages.event.yellow', compact('data'));
    }
    public function scout()
    {
        $id = 1;
        $data = DB::table('eventinfos')
            ->join('events', 'eventinfos.event_cat_id', '=', 'events.id')
            ->select('eventinfos.*', 'events.category')
            ->where('events.id', '=', $id)
            ->get();
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
