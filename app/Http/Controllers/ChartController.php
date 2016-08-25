<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChartController extends Controller
{
    public function chart() {
		//flash('Charts Go Here');
		$site_title = "Chart Page";
	    return view('chart', compact('site_title'));
    }
}
