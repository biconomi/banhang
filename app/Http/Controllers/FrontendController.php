<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    function GetIndex()
    {
    	// echo 'nội dung';
    		return view("frontend.index");
    }
}
