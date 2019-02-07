<?php

namespace App\Http\Controllers;

use App\Vacancy;
use App\News;
use App\Holiday;
use App\Facility;

use App\Ataglance;
use Illuminate\Http\Request;

class InformationFrontController extends Controller
{
    public function studentsummary()
    {
        $studentsummary = Ataglance::all();
        return view('front.pages.information.studentsummary', compact('studentsummary'));
    }
    public function vacancy()
    {
        $data = Vacancy::all();
    	return view('front.pages.information.vacancy', compact('data'));
    }
    public function news()
    {
        $data = News::all();
    	return view('front.pages.information.news', compact('data'));
    }
    public function holiday()
    {
        $data = Holiday::all();
    	return view('front.pages.information.holiday', compact('data'));
    }
    public function facility()
    {
        $data = Facility::all();
    	return view('front.pages.information.facility', compact('data'));
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
