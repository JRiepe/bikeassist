<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TrailController extends Controller
{
    public function trail() {
		//flash('Charts Go Here');
		$site_title = "Trails Page";
	    return view('trail', compact('site_title'));
    }
}
