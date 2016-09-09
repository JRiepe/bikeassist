<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;


class ContactController extends Controller
{
    
    public function create()
    {
        
        return view('/contact');
    } 

    public function send(ContactFormRequest $request)
    {
    	
    	$title = $request->input('name');
    	$email = $request->input('email');
        $content = $request->input('message');
    	Mail::send('send', array(
	        	'title' => $title,
	            'email' => $email,
	            'content' => $content),
    		function($message)	{
		        $message->from('johnriepe@gmail.com');
		        $message->to('johnriepe@gmail.com', 'Admin')->subject('Contact Us');
    		}); 
    		
    	
   		return redirect('/contact')
   		->with('message','Thanks for contacting us!');   
	} // end function store
} // end ContactController
