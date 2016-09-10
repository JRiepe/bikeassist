<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function about() {
	    //flash('Please Enter Info');
	    
	    return view('about');
	}
}
