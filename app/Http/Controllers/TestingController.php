<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    //
    public function testing01($id)
    {
    	echo 'chào mừng bạn đến với testing 01 '.$id;
    }
}
