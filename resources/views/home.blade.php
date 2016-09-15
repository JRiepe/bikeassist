@extends('layouts.app')


@section('content')
<div class="container" >
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!--<div class="panel panel-default">
                <div class="panel-heading">Welcome to Bike Assist</div>

                <div class="panel-body"> -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">					    
						<div class="item active">
					      <a href="{{ url('/trail') }}"><img src="/images/trailride.png"  alt="Bike Trails"></a>
					      <div class="carousel-caption">
					        <h1 style='color: #000000;'>Map Bike Trails and Paths</h1> 
					      </div>
					    </div>
					    <div class="item">
					      <a href="{{ url('/trail') }}"><img src="/images/mapride.png"  alt="Find a Trail near you"></a>
					      <div class="carousel-caption">
					        <h1 style='color: #000000;'>Full Screen Maps of Trails and Paths</h1> 
					      </div>
					    </div>
					    <div class="item">
					      <a href="{{ url('/ride') }}"><img src="/images/addride.png" alt="Add your latest ride"></a>
					      <div class="carousel-caption">
					        <h1 style='color: #000000;'>Keep Track of Your Rides</h1>
					      </div>
					    </div>					    
					    <div class="item">
					      <a href="{{ url('/chart') }}"><img src="/images/chartride.png" alt="Chart Rides"></a>
					      <div class="carousel-caption">
					    	<h1 style='color: #000000;'>See Charts of Your Progress</h1> 
					      </div>
					    </div>
					    ...
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
                <!--</div>
            </div>
        </div>-->
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

<script>
	$('.carousel').carousel({
  		interval: 2000
	});
</script>
@endsection
