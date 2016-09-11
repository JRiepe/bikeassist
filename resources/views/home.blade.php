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
					      <img src="/images/addride.png" href="{{ url('/ride') }}" alt="Add your latest ride">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="/images/chartride.png" href="{{ url('/chart') }}" alt="Chart Rides">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="/images/trailride.png" href="{{ url('/trail') }}" alt="Bike Trails">
					      <div class="carousel-caption">
					        ...
					      </div>
					    </div>
					    <div class="item">
					      <img src="/images/mapride.png" href="{{ url('/trail') }}" alt="Find a Trail near you">
					      <div class="carousel-caption">
					        ...
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
<script>
	$('.carousel').carousel({
	  interval: 2000
	})
</script>
@endsection
