<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

use App\Http\Requests;

class TrailController extends Controller
{
    public function trail() {
		//flash('Charts Go Here');
		Mapper::location('Winter Garden Florida')->map(['zoom' => 11, 'center' => true, 'marker' => false, 'overlay' => 'BIKE']);
		$site_title = "Trails Page";
	    return view('trail', compact('site_title'));
    }
}
