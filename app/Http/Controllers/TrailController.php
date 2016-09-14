<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use App\Http\Requests;


class TrailController extends Controller
{
    public function trail() {
		//flash('Charts if (! $searchTerm)
		$searchLocation = "";
		Mapper::location("Orlando")->map(['zoom' => 11, 'center' => true, 'marker' => false, 'overlay' => 'BIKE']);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title', 'searchLocation'));
    }

    public function trailSearch(Request $request) {
		//flash('Charts Go Here');
		$searchLocation = $request->input('searchLocation');
		if (! $searchLocation){
			$searchLocation = "Orlando";
		}
		Mapper::location($searchLocation)->map(['zoom' => 11, 'center' => true, 'marker' => false, 'overlay' => 'BIKE']);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title', 'searchLocation'));
    }

    public function geoSearch(Request $request) {
		//flash('Charts Go Here');$id = Input::get("id");
		$lat = $request->input('latitude');
		$long = $request->input('longitude');
		$searchLocation = $request->input('searchLocation');
		if (! $searchLocation){
			$searchLocation = "Orlando";
		}
		Mapper::map($lat, $long, ['zoom' => 11, 'center' => true, 'marker' => false, 'overlay' => 'BIKE']);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title', 'searchLocation'));
    }

}
