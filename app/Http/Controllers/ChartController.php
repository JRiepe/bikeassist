<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Auth;

class ChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function chart() {	
			//flash('Charts Go Here');
			$site_title = "Chart Page";
            $pastRides = DB::table('ride_data')
                ->where('user_id', '=', Auth::user()->id)
                ->get();
		    return view('chart', compact('site_title', 'pastRides'));
    }
}

