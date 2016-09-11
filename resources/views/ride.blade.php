@extends('layouts/app')

@section('title')
My Information
@stop



@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">Add your latest Ride information here</div>

		                <div class="panel-body">
	                 		<div class="table-responsive">
		                    	<table class="table table-striped table-inverse">
		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(minutes)</th>
					                      	<th data-field="rideDistance">Distance(miles)</th>
					                  	</tr>
			                		</thead>
			                		<tbody>
				                    	<tr>
						                 	{!! Form::open(array('url' => '/ride')) !!}
										    <td>{!! Form::date('rideDate') !!}</td>
										    
										    <td>{!! Form::selectRange('rideTime', 1, 360) !!}</td>
										    <td>{!! Form::text('rideDistance') !!}</td>
										    {{ Form::hidden('_method', 'POST') }}
										    <td>{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}</td> 
										    {!! Form::close() !!}
							    		</tr>
		                			</tbody>
		                		</table>
		                	
								<!-- Errors go here! -->
								<div class='text-center'><h4>{{ $errors->first('rideDate') }}</h4><h4>{{ $errors->first('rideTime') }}</h4><h4>{{ $errors->first('rideDistance') }}</h4>
							    </div>

		                	</div>
		                </div>
		            </div>
		        </div>
		    
		    </div>
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
			        <div class="panel panel-default">
		                <div class="panel-heading">Your Ride History</div>

		                <div class="panel-body" style="height: auto;">
		                    <div class="table-responsive" style="max-height: 800px;">
		                    	<table class="table table-striped table-inverse" style="height: auto;">
		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(minutes)</th>
					                      	<th data-field="rideDistance">Distance(miles)</th>
					                  	</tr>
			                		</thead>
		                    		<tbody>
				                    	
						            	@foreach ($rides as $past)
						                	<tr>   
												<td>{{ $past->ride_date }}</td>
											    <td>{{ $past->ride_time }}</td>
											    <td>{{ $past->ride_distance }}</td>
											    
											    {!! Form::open(array('url' => '/ride/'.$past->id)) !!}
											    {{ Form::hidden('_method', 'DELETE') }}
											    <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger', 'id' => 'delete')) !!}</td> 
										    	{!! Form::close() !!}
										    	<!--<td><button class='btn btn-danger' id='delete' value="{{ url('/ride/'.$past->id) }}">Delete</button> -->
										    	{!! Form::open(array('url' => '/ride/edit/'.$past->id)) !!}
										    	{{ Form::hidden('_method', 'GET') }}
											    <td>{!! Form::submit('Update', array('class' => 'btn btn-warning'))!!}</td> 
										    	{!! Form::close() !!}
											</tr>
										@endforeach
		                			</tbody>
		                		</table>
		                	</div>
			                
			         	</div>
			    	</div>
		    	</div>
		    </div>
		</div>
		<script>
	
    	</script>
@endsection
