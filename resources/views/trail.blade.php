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
		                <div class="panel-body">
		                    
							<div class="col-md-6 form-group">
				                    <h4>Search for a bike trail near you!</h4>
				                    
				                    {!! Form::open(array('url' => '/trailSearch', 'method' => 'get')) !!}
								    {!! Form::text('searchLocation', $searchLocation) !!}
								    {!! Form::submit('Submit', array('class' => 'btn btn-primary'))!!} 
								    {!! Form::close() !!}								
							</div>
							<div class="col-md-6 map-panel">
								{!! Mapper::render() !!}
							</div>
		                </div>
		                
		            </div>
		        </div>
		    </div>
		    
		</div>
		
@stop
	
	
