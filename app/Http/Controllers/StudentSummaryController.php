<?php

namespace App\Http\Controllers;

use App\Ataglance;
use Illuminate\Http\Request;

class StudentSummaryController extends Controller
{
    public function index()
    {
    	
    	$studentinfo = Ataglance::all();
    	return view('admin.pages.information.studentsummary', compact('studentinfo'));
    }
}
