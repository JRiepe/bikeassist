<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login() {
		//flash('Login with Facebook');
		$site_title = "Login";
	    return view('login', compact('site_title'));
    }
}
