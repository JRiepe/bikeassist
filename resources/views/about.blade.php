@extends('layouts/app')

@section('title')
My Information
@stop

@section('content')
	
	<h2>First Name: {{$first_name}}</h2>
	<h2>Last Name: {{$last_name}}</h2>
	<h2>email: <a href="mailto:{{$email_address}}">{{$email_address}}<a></h2>
	<a href="/"><button type="button" class="btn btn-primary">Home</button></a>
	<a href="/chart"><button type="button" class="btn btn-primary">Chart</button></a>
	
@stop