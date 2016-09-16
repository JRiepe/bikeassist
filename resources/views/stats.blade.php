@extends('layouts/app')

@section('title')
My Information
@stop



@section('content')
		<div class="container">
		    
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
			        
		                
		                <div class="panel-body" style="height: auto;">
		                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
								<div class="btn-group" role="group">
								    <a href="{{ url('/stats') }}"><button type="button" class="btn btn-primary" id='allButton'>All Data</button></a>
								</div>
								<div class="btn-group" role="group">
								    <a href="{{ url('/stats/month') }}"><button type="button" class="btn btn-primary" id='monthButton'>One Month</button></a>
								</div>
								<div class="btn-group" role="group">
								    <a href="{{ url('/stats/twoWeek') }}"><button type="button" class="btn btn-primary" id='twoWeekButton'>Two Weeks</button></a>
								</div>
								<div class="btn-group" role="group">
								    <a href="{{ url('/stats/oneWeek') }}"><button type="button" class="btn btn-primary" id='oneWeekButton'>One Week</button></a>
								</div>
							</div>
   
		            <div class="panel panel-default">
		                <div class="panel-heading">{{ $data_title }}</div>
		                    <div class="table-responsive" id="allData" style="display: inline; max-height: 800px;">
		                    	
							
		                    	<table class="table table-striped table-inverse" style="height: auto;">
		               				<thead>
					                  	<tr>
					                      	<th data-field="totalcount">Total Rides</th>
					                      	<th data-field="totaltime">Total Time(min.)</th>
					                      	<th data-field="totaldistance">Total Distance(mi.)</th>
					                      	<th data-field="avgtime">Avg. Time(min.)</th>
					                      	<th data-field="avgdistance">Avg. Distance(mi.)</th>
					                      	<th data-field="avgspeed">Avg. Speed(mph)</th>
					                  	</tr>
			                		</thead>
		               		@if (count($all_rides) > 0)	
		               				<tr>
		               					<td>{{ $total_count }}</td>
		               					<td>{{ $total_time }}</td>
		               					<td>{{ $total_distance }}</td>
		               					<td>{{ round(($total_time/$total_count), 1) }}</td>
		               					<td>{{ round(($total_distance/$total_count), 1) }}</td>
		               					<td>{{ round(($total_distance*60/$total_time), 1) }}</td>
		             			
		               				</tr>
		               		@else
							    <td class='text-center'>There are no records for the time period selected!</td>
							@endif		
		               			</table>
							
		                </div>
					</div>   			
		            <div class="panel panel-default">
		                <div class="panel-heading">{{ $data_title }}</div>
								<table class="table table-striped table-inverse" style="height: auto;">

		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(min.)</th>
					                      	<th data-field="rideDistance">Distance(mi.)</th>
					                      	<th data-field="rideSpeed">Avg. Speed(mph)</th>
					                  	</tr>
			                		</thead>
		                    		<tbody>
				                    	
						            	@foreach ($all_rides as $all)
						                	<tr>   
												<td>{{ $all->ride_date }}</td>
											    <td>{{ $all->ride_time }}</td>
											    <td>{{ $all->ride_distance }}</td>
											    <td>{{ round($all->ride_distance*60/$all->ride_time, 1) }}
											</tr>
										@endforeach
		                			</tbody>

		                		</table>
		                	</div>
		                	<!-- End All Data -->
			                
			                
			         	</div>
			    	</div>
		    	</div>
		    </div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

		<script>

			

    	</script>
@endsection
