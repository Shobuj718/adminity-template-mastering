<?php

namespace App\Http\Controllers;

use App\Ataglance;
use Illuminate\Http\Request;

class AtaglanceController extends Controller
{
    public function teacherinfo()
    {
    	$ataglance = Ataglance::all();
    	return view('front.pages.ataglance.teacherinfo', compact('ataglance'));
    }
    public function governingcouncil()
    {
    	$ataglance = Ataglance::all();
    	return view('front.pages.ataglance.governingcouncil', compact('ataglance'));
    }
    public function managingcommitee()
    {
    	$ataglance = Ataglance::all();
    	return view('front.pages.ataglance.managingcommitee', compact('ataglance'));
    }
    public function studentinfo()
    {
    	$ataglance = Ataglance::all();
    	return view('front.pages.ataglance.studentinfo', compact('ataglance'));
    }
    public function employeeinfo()
    {
    	$ataglance = Ataglance::paginate(20);
    	return view('front.pages.ataglance.employeeinfo', compact('ataglance'));
    }
    public function assetinfo()
    {
    	$ataglance = Ataglance::all();
    	return view('front.pages.ataglance.assetinfo', compact('ataglance'));
    }
}
