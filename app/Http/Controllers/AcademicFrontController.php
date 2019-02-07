<?php

namespace App\Http\Controllers;

use App\Parentguideline;

use App\Ataglance;
use Illuminate\Http\Request;

class AcademicFrontController extends Controller
{
    public function classRoutine()
    {
    	return view('front.pages.academic.classRoutine');
    }
    public function examRoutine()
    {
    	return view('front.pages.academic.examRoutine');
    }
    public function examResults()
    {
    	return view('front.pages.academic.examResults');
    }
    public function academicCalendar()
    {
    	return view('front.pages.academic.academicCalendar');
    }
    public function parentsGuideline()
    {
        $data = Parentguideline::all();
    	return view('front.pages.academic.parentsGuideline', compact('data'));
    }

    public function bookList()
    {
    	return view('front.pages.academic.bookList');
    }

    public function photoGallery()
    {
    	$photogallery = Ataglance::all();

    	return view('front.pages.academic.photoGallery', compact('photogallery'));
    }

   	public function videoGallery()
   	{
   		$videoGallery = Ataglance::all();
   		
   		return view('front.pages.academic.videoGallery', compact('videoGallery'));
   	}

}

