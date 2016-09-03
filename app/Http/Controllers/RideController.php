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
use App\Http\Requests\EditRides;
use Carbon\Carbon;


class RideController extends Controller
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
        $rides = Rides::where('user_id', Auth::user()->id)->get();

        /*DB::table('ride_data')
                ->where('user_id', '=', Auth::user()->id)
                ->get();*/
        return view('/ride', compact('site_title', 'rides'));
        
    }

    public function store(EditRides $request) { 
        $rides = new Rides;
        $rides->user_id = Auth::user()->id;
        $rides->ride_date = $request->input('rideDate');
        $rides->ride_time = $request->input('rideTime');
        $rides->ride_distance = $request->input('rideDistance');
        
        
        $rides->save();    
      
        return redirect('/ride');
        
    }

    public function edit($id) {
        


        /* DB::table('ride_data')
            ->where('id', $id)
            ->update([
                'ride_date' => $request->input('rideDate'),
                'ride_time' => $request->input('rideTime'),
                'ride_distance' => $request->input('rideDistance'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
                ]); */
        return redirect('/ride');
    }

    public function destroy($id) {
        Rides::find($id)->delete();
        
        
        return redirect('/ride');
    }


}
