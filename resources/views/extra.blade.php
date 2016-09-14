@extends('layouts/app')

@section('title')
My Information
@stop

@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">Find Bike Trails</div>                		
		                <div class="panel-body" style="height: auto;">
		                    
							<div class="col-md-6 form-group">
				                <div>
				                    <h4>Search for a bike trail near you!</h4>
				                    
				                    {!! Form::open(array('url' => '/trailSearch', 'method' => 'get')) !!}
								    {!! Form::text('searchLocation', $searchLocation) !!}
								    {!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!} 
								    {!! Form::close() !!}
								</div>								
								
								
								<div id='geo' style="display: none;">
										{!! Form::open(array('url' => '/geoSearch', 'method' => 'get')) !!}
										
										<td>{!! Form::submit('Search this Location', array('class' => 'btn btn-primary fa fa-crosshairs fa-2x')) !!}</td>
										{!! Form::close() !!}
								</div>

								
							</div>
							
							<div class="col-md-6 map-panel">
								{!! Mapper::render() !!}
							</div>
		                </div>
		                
		            </div>
		        </div>
		    </div>
		    
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

		<script>
			if ( navigator.geolocation ) {
					// Get the user's current position
				navigator.geolocation.getCurrentPosition(showPosition);
				$('#geo').empty();
				$('#geo').append("{!! Form::open(array('url' => '/geoSearch', 'method' => 'get')) !!}");
				$('#geo').append("{!! Form::hidden('lat', lat) !!}");
				$('#geo').append("{!! Form::hidden('long', long) !!}");
				$('#geo').append("<td>{!! Form::submit('Search this Location', array('class' => 'btn btn-primary fa fa-crosshairs fa-2x')) !!}</td>");
				$('#geo').append("{!! Form::close() !!}");
			

			} 

			function showPosition(position) {
				var latitude = position.coords.latitude;
				var longitude = position.coords.longitude;
			}
				
			
			

			//$('#geo').append('<br><button id="geoButton" class="btn btn-primary"><i class="fa fa-crosshairs fa-2x" aria-hidden="true"></i> Search Near You</button>');
				
			<script>
			var lat;
			var long;
			if ( navigator.geolocation ) {
					// Get the user's current position
				navigator.geolocation.getCurrentPosition(showPosition);
				$('#geo').css('display', 'contents');
			} 

			function showPosition(position) {
				lat = position.coords.latitude;
				long = position.coords.longitude;
			}
			
		</script>
		    
								<div id='geo'>
									{!! Form::open(array('url' => '/geoSearch', 'method' => 'get')) !!}
									{{ Form::hidden('latitude', lat) }}
									{{ Form::hidden('longitude', long) }}
									<td>{!! Form::submit('Search this Location', array('class' => 'btn btn-primary fa fa-crosshairs fa-2x')) !!}</td>
									{!! Form::close() !!}
								</div>

		alert("Latitude: " + position.coords.latitude + 
            " Longitude: " + position.coords.longitude); 
				
		
@stop
	
	
