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
        return view('/ride', compact('site_title', 'rides'));
        
    }

    public function store(EditRides $request) { 
        $rides = new Rides;
        $rides->user_id = Auth::user()->id;
        $rides->ride_date = $request->input('rideDate');
        $rides->ride_time = $request->input('rideTime');
        $rides->ride_distance = $request->input('rideDistance');
        $rides->save();    
        flash('Record has been Saved!', 'success');
        return redirect('/ride');
        
    }

    public function edit($id) {
        $toEdit = Rides::find($id);
        return view('/edit', compact('site_title', 'toEdit'));
    }

    public function update(EditRides $request) {
        
        $newrides = Rides::find($request->input('id'));
        $newrides->ride_date = $request->input('rideDate');
        $newrides->ride_time = $request->input('rideTime');
        $newrides->ride_distance = $request->input('rideDistance');
        $newrides->save();
       
        flash('Record has been Updated!', 'success');
        return redirect('/ride');  
    }

    public function destroy($id) {
        Rides::find($id)->delete();
        flash('Record has been Deleted!', 'success');
        return redirect('/ride');
    }


}
