@extends('layouts/app')

@section('title')
My Information
@stop



@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            
		        	<div class="panel panel-default"> 
		                <div class="panel-heading" style="height: auto;">
		                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
								<div class="btn-group" role="group">
								    <a href="{{ url('/chart') }}"><button type="button" class="btn btn-primary" id='allButton'>All Data</button></a>
								</div>
								<div class="btn-group" role="group">
								    <a href="{{ url('/chart/month') }}"><button type="button" class="btn btn-primary" id='monthButton'>One Month</button></a>
								</div>
								<div class="btn-group" role="group">
								    <a href="{{ url('/chart/twoWeek') }}"><button type="button" class="btn btn-primary" id='twoWeekButton'>Two Weeks</button></a>
								</div>
								<div class="btn-group" role="group">
								    <a href="{{ url('/chart/oneWeek') }}"><button type="button" class="btn btn-primary" id='oneWeekButton'>One Week</button></a>
								</div>
							</div>
   						</div> <!-- panel-body" -->
   					</div> <!-- panel-default -->



		            <div class="panel panel-default">
		                <div class="panel-heading">Time, Distance, and Speed per Ride {{ $data_title }}</div>
		                
		                <div class="panel-body">
		                	<div id="chart1-div" style="height: 400px; width: auto;"></div>
		                	</div>
		                <div class="panel-heading">Time per Ride {{ $data_title }}</div>
		                
		                <div class="panel-body">
		                	<div id="chart2-div" style="height: 400px; width: auto;"></div>
		                    
		                </div>
		                <div class="panel-heading">Distance per Ride {{ $data_title }}</div>
		                
		                <div class="panel-body">
		                	<div id="chart3-div" style="height: 400px; width: auto;"></div>
		                    
		                </div>
		                <div class="panel-heading">Average Speed per Ride {{ $data_title }}</div>
		                
		                <div class="panel-body">
		                	<div id="chart4-div" style="height: 400px; width: auto;"></div>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	
		
		{!!Lava::render('LineChart', 'chart_All', 'chart1-div')!!}
		{!!Lava::render('AreaChart', 'chart_Time', 'chart2-div')!!}
		{!!Lava::render('AreaChart', 'chart_Distance', 'chart3-div')!!}
		{!!Lava::render('AreaChart', 'chart_Speed', 'chart4-div')!!}
@endsection