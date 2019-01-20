<?php

namespace App\Http\Controllers;

use App\Ataglance;
use Illuminate\Http\Request;

class InformationFrontController extends Controller
{
    public function vacancy()
    {
    	return view('front.pages.information.vacancy');
    }
    public function news()
    {
    	return view('front.pages.information.news');
    }
    public function holiday()
    {
    	return view('front.pages.information.holiday');
    }
    public function facility()
    {
    	return view('front.pages.information.facility');
    }
    public function formerPrinciples()
    {
    	$formerPrinciples = Ataglance::all();

    	return view('front.pages.information.formerPrinciples',compact('formerPrinciples'));
    }
    public function formerTeachers()
    {
    	$formerTeachers = Ataglance::all();

    	return view('front.pages.information.formerTeachers',compact('formerTeachers'));
    }
    public function formerCommiteeMembers()
    {
    	$formerCommiteeMembers = Ataglance::all();

    	return view('front.pages.information.formerCommiteeMembers',compact('formerCommiteeMembers'));
    }
}
