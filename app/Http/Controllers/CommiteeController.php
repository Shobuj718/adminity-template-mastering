<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommiteeController extends Controller
{
    public function index()
    {
    	return view('admin.pages.commitee.all');
    }
}
