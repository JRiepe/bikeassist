@extends('layouts/app')

@section('title')
My Information
@stop



@section('content')
		<div class="container">
		    
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
			        <div class="panel panel-default">
		                <div class="panel-heading divTitle"></div>
		                
		                <div class="panel-body" style="height: auto;">
		                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
								<div class="btn-group" role="group">
								    <button type="button" class="btn btn-default" id='allButton'>All Data</button>
								</div>
								<div class="btn-group" role="group">
								    <button type="button" class="btn btn-default" id='monthButton'>One Month</button>
								</div>
								<div class="btn-group" role="group">
								    <button type="button" class="btn btn-default" id='twoWeekButton'>Two Weeks</button>
								</div>
								<div class="btn-group" role="group">
								    <button type="button" class="btn btn-default" id='oneWeekButton'>One Week</button>
								</div>
							</div>
		                    <!-- All Data -->
		                    <div class="table-responsive" id="allData" style="display: inline; max-height: 800px;">
		                    	<table class="table table-striped table-inverse" style="height: auto;">
		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(minutes)</th>
					                      	<th data-field="rideDistance">Distance(miles)</th>
					                      	<th data-field="rideSpeed">Avg. Speed(mph)</th>
					                  	</tr>
			                		</thead>
		                    		<tbody>
				                    	
						            	@foreach ($allrides as $all)
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
			                
			                <!-- Month Data -->

		                    <div class="table-responsive" id="monthData" style="display: none; max-height: 800px;">
		                    	<table class="table table-striped table-inverse" style="height: auto;">
		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(minutes)</th>
					                      	<th data-field="rideDistance">Distance(miles)</th>
					                      	<th data-field="rideSpeed">Avg. Speed(mph)</th>
					                  	</tr>
			                		</thead>
		                    		<tbody>
				                    	
						            	@foreach ($monthrides as $month)
						                	<tr>   
												<td>{{ $month->ride_date }}</td>
											    <td>{{ $month->ride_time }}</td>
											    <td>{{ $month->ride_distance }}</td>
											    <td>{{ round($month->ride_distance*60/$month->ride_time, 1) }}
											</tr>
										@endforeach
		                			</tbody>

		                		</table>
		                	</div>
		                	<!-- End Month Data -->

		                	<!-- Two Week Data -->

		                    <div class="table-responsive" id='twoWeekData' style="display: none; max-height: 800px;">
		                    	<table class="table table-striped table-inverse" style="height: auto;">
		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(minutes)</th>
					                      	<th data-field="rideDistance">Distance(miles)</th>
					                      	<th data-field="rideSpeed">Avg. Speed(mph)</th>
					                  	</tr>
			                		</thead>
		                    		<tbody>
				                    	
						            	@foreach ($twoweekrides as $twoweek)
						                	<tr>   
												<td>{{ $twoweek->ride_date }}</td>
											    <td>{{ $twoweek->ride_time }}</td>
											    <td>{{ $twoweek->ride_distance }}</td>
											    <td>{{ round($twoweek->ride_distance*60/$twoweek->ride_time, 1) }}
											</tr>
										@endforeach
		                			</tbody>

		                		</table>
		                	</div>
		                	<!-- End Two Week Data -->

		                	<!-- One Week Data -->

		                    <div class="table-responsive" id="oneWeekData" style="display: none; max-height: 800px;">
		                    	<table class="table table-striped table-inverse" style="height: auto;">
		                    		<thead>
					                  	<tr>
					                      	<th data-field="rideDate">Date</th>
					                      	<th data-field="rideTime">Time(minutes)</th>
					                      	<th data-field="rideDistance">Distance(miles)</th>
					                      	<th data-field="rideSpeed">Avg. Speed(mph)</th>
					                  	</tr>
			                		</thead>
		                    		<tbody>
				                    	
						            	@foreach ($oneweekrides as $oneweek)
						                	<tr>   
												<td>{{ $oneweek->ride_date }}</td>
											    <td>{{ $oneweek->ride_time }}</td>
											    <td>{{ $oneweek->ride_distance }}</td>
											    <td>{{ round($oneweek->ride_distance*60/$oneweek->ride_time, 1) }}
											</tr>
										@endforeach
		                			</tbody>

		                		</table>
		                	</div>
		                	<!-- End One Week Data -->

			         	</div>
			    	</div>
		    	</div>
		    </div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

		<script>
			$('.divTitle').append('All Your Rides');
			
			$('#allButton').on('click', function() {
				$('.divTitle').empty();
				$('.divTitle').append('All Your Rides');
				document.getElementById("monthData").style.display = 'none';
				document.getElementById("twoWeekData").style.display = 'none';
				document.getElementById("oneWeekData").style.display = 'none';
				document.getElementById("allData").style.display = 'inline';
				
			});

			$('#monthButton').on('click', function() {
				$('.divTitle').empty();
				$('.divTitle').append('One Month of Data');
				document.getElementById("allData").style.display = 'none';
				document.getElementById("twoWeekData").style.display = 'none';
				document.getElementById("oneWeekData").style.display = 'none';
				document.getElementById("monthData").style.display = 'inline';
			});

			$('#twoWeekButton').on('click', function() {
				$('.divTitle').empty();
				$('.divTitle').append('Two Weeks of Data');
				document.getElementById("allData").style.display = 'none';
				document.getElementById("monthData").style.display = 'none';
				document.getElementById("oneWeekData").style.display = 'none';
				document.getElementById("twoWeekData").style.display = 'inline';
			});

			$('#oneWeekButton').on('click', function() {
				$('.divTitle').empty();
				$('.divTitle').append('One Week of Data');
				document.getElementById("allData").style.display = 'none';
				document.getElementById("monthData").style.display = 'none';			
				document.getElementById("twoWeekData").style.display = 'none'
				document.getElementById("oneWeekData").style.display = 'inline';
			});


    	</script>
@endsection
