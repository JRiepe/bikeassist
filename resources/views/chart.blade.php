@extends('layouts/app')

@section('title')
My Information
@stop



@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">Time, Distance, and Speed per Ride</div>
		                
		                <div class="panel-body">
		                	<div id="chart1-div" style="height: 400px; width: auto;"></div>
		                    
		                </div>
		                <div class="panel-heading">Time per Ride</div>
		                
		                <div class="panel-body">
		                	<div id="chart2-div" style="height: 400px; width: auto;"></div>
		                    
		                </div>
		                <div class="panel-heading">Distance per Ride</div>
		                
		                <div class="panel-body">
		                	<div id="chart3-div" style="height: 400px; width: auto;"></div>
		                    
		                </div>
		                <div class="panel-heading">Average Speed per Ride</div>
		                
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