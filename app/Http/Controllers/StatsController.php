<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent;
use App\User;
use App\Rides;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class StatsController extends Controller
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
    public function index() {
		$site_title = "Ride Page";
        
        $allrides = Rides::where('user_id', Auth::user()->id)->orderBy('ride_date', 'DESC')->get();
        
        $monthrides = Rides::where('user_id', Auth::user()->id)->where('ride_date', '<=', Carbon::now())->where('ride_date', '>=', Carbon::now()->subMonths(1))->orderBy('ride_date', 'DESC')->get();

        $twoweekrides = Rides::where('user_id', Auth::user()->id)->where('ride_date', '<=', Carbon::now())->where('ride_date', '>=', Carbon::now()->subWeeks(2))->orderBy('ride_date', 'DESC')->get();
        
        $oneweekrides = Rides::where('user_id', Auth::user()->id)->where('ride_date', '<=', Carbon::now())->where('ride_date', '>=', Carbon::now()->subWeeks(1))->orderBy('ride_date', 'DESC')->get();

        return view('/stats', compact('site_title', 'allrides', 'monthrides', 'twoweekrides', 'oneweekrides'));

        
    }



}
