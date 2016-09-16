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
    public function all() {
		$data_title = "All Your Rides";
        $site_title = "Ride Page";
        
        $all_rides = Rides::where('user_id', Auth::user()->id)->orderBy('ride_date', 'DESC')->get();
        if ($all_rides === NULL) {
            return view('/stats', compact('site_title', 'all_rides', 'total_count', 'total_time', 'total_distance', 'data_title'));
        }
        $total_count = $all_rides->count();
        $total_time = $all_rides->sum('ride_time');
        $total_distance = $all_rides->sum('ride_distance');
        

        return view('/stats', compact('site_title', 'all_rides', 'total_count', 'total_time', 'total_distance', 'data_title'));

        
    }

    public function month() {
        $data_title = "One Month of Rides";
        $site_title = "Ride Page";
        
        
        
        $all_rides = Rides::where('user_id', Auth::user()->id)->where('ride_date', '<=', Carbon::now())->where('ride_date', '>=', Carbon::now()->subMonths(1))->orderBy('ride_date', 'DESC')->get();

        $total_count = $all_rides->count();
        $total_time = $all_rides->sum('ride_time');
        $total_distance = $all_rides->sum('ride_distance');
        

        return view('/stats', compact('site_title', 'all_rides', 'total_count', 'total_time', 'total_distance', 'data_title'));

        

        
    }

    public function twoWeek() {
        $data_title = "Two Weeks of Rides";
        $site_title = "Ride Page";
        
       

        $all_rides = Rides::where('user_id', Auth::user()->id)->where('ride_date', '<=', Carbon::now())->where('ride_date', '>=', Carbon::now()->subWeeks(2))->orderBy('ride_date', 'DESC')->get();
        
        
        $total_count = $all_rides->count();
        $total_time = $all_rides->sum('ride_time');
        $total_distance = $all_rides->sum('ride_distance');
        

        return view('/stats', compact('site_title', 'all_rides', 'total_count', 'total_time', 'total_distance', 'data_title'));
        

        
    }

    public function oneWeek() {
        $data_title = "One Week of Rides";
        $site_title = "Ride Page";
        
        
        
        $all_rides = Rides::where('user_id', Auth::user()->id)->where('ride_date', '<=', Carbon::now())->where('ride_date', '>=', Carbon::now()->subWeeks(1))->orderBy('ride_date', 'DESC')->get();

        $total_count = $all_rides->count();
        $total_time = $all_rides->sum('ride_time');
        $total_distance = $all_rides->sum('ride_distance');
        

        return view('/stats', compact('site_title', 'all_rides', 'total_count', 'total_time', 'total_distance', 'data_title'));    
        
    }
}
