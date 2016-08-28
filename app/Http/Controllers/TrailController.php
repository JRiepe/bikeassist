<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use App\Http\Requests;

class TrailController extends Controller
{
    public function trail() {
		//flash('Charts Go Here');
		Mapper::location('Orlando')->map(['zoom' => 15, 'center' => false, 'marker' => false, 'overlay' => 'BIKE', 'height' => 400, 'width' => 400]);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title'));
    }
}
