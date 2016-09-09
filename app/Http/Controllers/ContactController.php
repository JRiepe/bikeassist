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
        $content = $request->input('message');

        Mail::send('send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('johnriepe@gmail.com', 'John Riepe');

            $message->to('johnriepe@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);




    	/*Mail::to($request->input('email'))
    		->send('send', array(
	        	'name' => $request->input('name'),
	            'email' => $request->input('email'),
	            'user_message' => $request->input('message')),
    		function($message)	{
		        $message->from('postmaster@app9250d1afae9949378e02be3880af87dd.mailgun.org');
		        $message->to('postmaster@app9250d1afae9949378e02be3880af87dd.mailgun.org', 'Admin')->subject('Contact Us');
    		}); 
    		
    	
   		return redirect()->to('/contact');
   		//->with('message', 'Thanks for contacting us!'); */   
	} // end function store
} // end ContactController
