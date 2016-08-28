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
		                <div class="panel-body text-center">
		                    <form>
								<div className="form-group">
									<h4><strong>Enter Location to Map</strong></h4>
										<label>Search Term:</label>
										<input type="text" className="form-control text-center" id="searchTerm"  value="Orlando"/>	
										<button type="button" className="btn btn-primary" value={this.searchTerm}>Submit</button>
								</div>

							</form>
		                </div>
		                <div class="panel-body text-center map-panel">
							{!! Mapper::render() !!}
						</div>
		            </div>
		        </div>
		    </div>
		    
		</div>
		
		
@stop
	
	<!--<a href="/"><button type="button" class="btn btn-primary">Home</button></a>
	<a href="/about"><button type="button" class="btn btn-primary">About</button></a>
	-->
