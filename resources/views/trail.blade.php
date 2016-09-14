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
								<div>
										{!! Form::open(array('url' => '/geoSearch', 'method' => 'get')) !!}
										{{ Form::hidden('latitude', '', array('id' => 'lat')) }}
										{{ Form::hidden('longitude', '', array('id' => 'long')) }}
										<td>{!! Form::submit('Search this Location', array('class' => 'btn btn-primary fa fa-crosshairs fa-2x')) !!}</td>
										{!! Form::close() !!}
								</div>

								<div class='legend'>
								<h4>Legend</h4><hr>
									<div class='inlegend'>
										<p><span style='color: darkgreen; font-size: 28px;'>__</span> Dark green = multi-use trails (no motorized vehicles)</p>
										<p><span style='color: limegreen; font-size: 28px;'>__</span> Light green = streets with bike lanes</p>
										<p><span style='color: limegreen; font-size: 28px;'>...</span> Dashed green = other streets recommended for cyclists</p>
									</div>
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
			var lat;
			var long;
			if ( navigator.geolocation ) {
					// Get the user's current position
				navigator.geolocation.getCurrentPosition(showPosition);
			} 
			else {
				flash('GPS Search not available for your device', 'danger');
			}

			function showPosition(position) {
				document.getElementById("lat").value = position.coords.latitude;
				document.getElementById("long").value = position.coords.longitude;
				//alert("Latitude: " + position.coords.latitude + 
            //" Longitude: " + position.coords.longitude); 
				
			}
			
			
   
		</script>
		
@stop
	
	
