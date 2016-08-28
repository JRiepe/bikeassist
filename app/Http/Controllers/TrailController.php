<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use App\Http\Requests;


class TrailController extends Controller
{
    public function trail() {
		//flash('Charts if (! $searchTerm)
		Mapper::location("Orlando")->map(['zoom' => 11, 'center' => true, 'marker' => false, 'overlay' => 'BIKE']);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title'));
    }

    public function trailSearch(Request $request) {
		//flash('Charts Go Here');
		$term = $request->input('searchTerm');
		Mapper::location($term)->map(['zoom' => 11, 'center' => true, 'marker' => false, 'overlay' => 'BIKE']);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title', 'term'));
    }

}
