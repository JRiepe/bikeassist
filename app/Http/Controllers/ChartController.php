<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use App\User;
use App\Rides;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Carbon\Carbon;

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
            $pastRides = Rides::where('user_id', Auth::user()->id)->get();
		    return view('chart', compact('site_title', 'pastRides'));
    }
}

