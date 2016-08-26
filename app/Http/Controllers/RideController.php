<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RideController extends Controller
{
    public function ride() {
		//flash('Charts Go Here');
		$site_title = "Ride Page";
	    return view('ride', compact('site_title'));
    }
}
