<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmailAvailableController extends Controller
{
    public function emailCheck(Request $request)
    {
    	if($request->get('email')){
    		$email = $request->get('email');
    		$data = DB::table('users')
    				->where('email', $email)
    				->count();
    		if($data > 0){
    			echo '1';
    		}
    		else{
    			echo '0';
    		}
    	}
    }

    public function mobileCheck(Request $request)
    {
    	if($request->get('mobile')){
    		$mobile = $request->get('mobile');
    		$data = DB::table('users')
    				->where('mobile', $mobile)
    				->count();
    		if($data > 0){
    			echo '1';
    		}
    		else{
    			echo '0';
    		}
    	}
    }
   
}
