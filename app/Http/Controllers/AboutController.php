<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    public function about() {
	    //flash('Please Enter Info');
	    $site_title = "My Information";
	    $first_name = "John";
	    $last_name = "Riepe";
	    $email_address = "johnriepe@gmail.com";
	    return view('about', compact('site_title', 'first_name', 'last_name', 'email_address'));
	}
}
