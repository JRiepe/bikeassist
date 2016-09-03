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
										    <td>{!! Form::number('rideDistance') !!}</td>
										    {{ Form::hidden('_method', 'POST') }}
										    <td>{!! Form::submit('Submit', array('class' => 'btn btn-primary'))!!}</td> 
										    {!! Form::close() !!}
							    		</tr>
		                			</tbody>
		                		</table>
		                	</div>

		                </div>
		            </div>
		        </div>
		    </div>
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
			        <div class="panel panel-default">
		                <div class="panel-heading">Your Ride History</div>

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
				                    	
						            	@foreach ($rides as $past)
						                	<tr>   
												<td>{{ $past->ride_date }}</td>
											    <td>{{ $past->ride_time }}</td>
											    <td>{{ $past->ride_distance }}</td>
											    {!! Form::open(array('url' => '/ride/'.$past->id)) !!}
											    {{ Form::hidden('_method', 'DELETE') }}
											    <td>{!! Form::submit('Delete', array('class' => 'btn btn-danger delete')) !!}</td> 
										    	{!! Form::close() !!}
										    	{!! Form::open(array('url' => '/ride/'.$past->id)) !!}
										    	{{ Form::hidden('_method', 'PUT') }}
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
			$(document).on('submit', '.delete', function(){
        		return confirm("Do you want to delete this item?");
    		});
		</script>
@endsection