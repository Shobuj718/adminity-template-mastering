<?php

namespace App\Http\Controllers;

use App\User;
use App\TNO;
use App\President;
use App\Principal;
use App\Viceprincipal;
use App\History;
use App\Founder;
use App\Schoollaw;
use App\Goalpurpose;
use App\Achievesuccess;
use App\Physicalinfra;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AboutusFrontController extends Controller
{
    public function tnomessage()
    {
        $tno = $this->getTnoInfo();

        return view('front.pages.aboutus.tnomessage', compact('tno'));
    }
    public function presidentmessage()
    {
        $data = President::first();
    	return view('front.pages.aboutus.presidentmessage', compact('data'));
    }
    public function principalmessage()
    {
        $data = Principal::first();
    	return view('front.pages.aboutus.principalmessage', compact('data'));
    }
    public function viceprincipalmessage()
    {
        $data = Viceprincipal::first();
    	return view('front.pages.aboutus.viceprincipalmessage', compact('data'));
    }
    public function history()
    {
        $data = History::first();
    	return view('front.pages.aboutus.history', compact('data'));
    }
    public function founder()
    {
        $data = Founder::first();
    	return view('front.pages.aboutus.founder', compact('data'));
    }
    public function schoollaw()
    {
        $data = Schoollaw::all();
    	return view('front.pages.aboutus.schoollaw', compact('data'));
    }
    public function goalpurpose()
    {
        $data = Goalpurpose::all();
    	return view('front.pages.aboutus.goalpurpose',compact('data'));
    }
    public function achievment()
    {
        $data = Achievesuccess::get();
    	return view('front.pages.aboutus.achievment',compact('data'));
    }
    public function infrastructure()
    {
        $data = Physicalinfra::all();
    	return view('front.pages.aboutus.infrastructure',compact('data'));
    }

    public function getTnoInfo()
    {
        return DB::table('users')
                ->join('t_n_o_s', 'users.id', '=', 't_n_o_s.user_id')
                ->orderBy('t_n_o_s.id', 'desc')
                ->get(array(
                    't_n_o_s.id',
                    'users.name',
                    'users.email',
                    'users.mobile',
                    't_n_o_s.message',
                    't_n_o_s.image',
                    ))
                ->first();
    }
}
