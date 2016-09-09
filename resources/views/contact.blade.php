@extends('layouts/app')

@section('title')
My Information
@stop


@section('content')
		<div class="container">
		    <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <div class="panel panel-default">
		                <div class="panel-heading">Contact Us</div>

		                <div class="panel-body">
		                    
		                	<div class='text-center'><h4>{{ $errors->first('name') }}</h4><h4>{{ $errors->first('email') }}</h4><h4>{{ $errors->first('message') }}</h4>
		                	@if (session('message'))
							    <div class="alert alert-success">
							        {{ session('message') }}
							    </div>
							@endif
							</div>
							<!-- /////////////////////////////////////////// -->
							<div class="col-md-4">
							</div>
							<div class="col-md-4">
								<table class="table table-striped table-inverse align-left" style="width: auto; height: auto;">
		                 
				                    	
						                 	{!! Form::open(array('url' => '/send')) !!}
						                 	
						                 	<p>{!! Form::label('name', 'Name') !!}</p>
										    <p>{!! Form::text('name') !!}</p>
										    <p>{!! Form::label('email', 'E-Mail Address') !!}</p>
										    <p>{!! Form::text('email') !!}</p>
										    <p>{!! Form::label('message', 'Message') !!}</p>
										    <p>{!! Form::textarea('message') !!}</p>
										    {{ Form::hidden('_method', 'POST') }}
										    <p>{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}</p>
										    {!! Form::close() !!}
							  
		                		</table>
		                	</div>
		                	<div class="col-md-4">
							</div>
							

							<!-- /////////////////////////////////////////// -->


							
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
@endsection	

