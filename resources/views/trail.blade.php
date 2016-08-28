@extends('layouts/app')

@section('title')
My Information
@stop

@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">Trail</div>

		                <div class="panel-body map-panel">
		                    {!! Mapper::render() !!}
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		
		
@endsection
	
	<!--<a href="/"><button type="button" class="btn btn-primary">Home</button></a>
	<a href="/about"><button type="button" class="btn btn-primary">About</button></a>
	-->
