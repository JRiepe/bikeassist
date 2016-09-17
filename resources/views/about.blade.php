@extends('layouts/app')

@section('title')
My Information
@stop


@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">About Bike Assist</div>

		                <div class="panel-body text-center">
		            		<h3>Thank you for visiting Bike Assist.</h3>
			                    <h4>This application was developed using Laravel's PHP framework.</h4>
		            		<div class='col-md-3'></div>
		                    <div class='col-md-6'>
			                    
			                    <h5>Programs I used during development:</h5>
			                            
				                    <ol class='text-left'>
					                    <li>Heroku</li>
					                    <li>JawsDB</li>
					                    <li>SendGrid</li>
					                    <li>Google Maps API</li>
					                    <li>Cornford Googlmapper</li>
					                    <li>Laravel Collective</li>
					                    <li>Lavacharts</li>
					                    <li>Laracasts Flash</li>
					                </ol>

					        </div> <!-- col-md-6 -->

					        
		                </div> <!-- panel-body -->
		            </div> <!-- panel panel-default -->
		        </div> <!-- col-md-10 col-md-offset-1 -->
		    </div> <!-- row -->
		</div> <!-- container -->
@endsection	

