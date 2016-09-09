@extends('layouts/app')

@section('content')
		<div class="container">
				<p>Name: {{$title}}</p>
				<p>Email: {{$email}}</p>
				<p>Message: {{$content}}</p>
		</div>
@endsection	
