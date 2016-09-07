@extends('layouts/app')

@section('title')
My Information
@stop



@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">Line Chart</div>
		                
		                <div class="panel-body">
		                	<div id="chart1-div" style="height: 400px;"></div>
		                    
		                </div>
		                <div class="panel-heading">Area Chart</div>
		                
		                <div class="panel-body">
		                	<div id="chart2-div" style="height: 400px;"></div>
		                    
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		{!!Lava::render('LineChart', 'chart_Line', 'chart1-div')!!}
		{!!Lava::render('AreaChart', 'chart_Area', 'chart2-div')!!}
@endsection