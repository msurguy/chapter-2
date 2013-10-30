@extends('layout')

@section('content')
  <h1>Services.</h1>
  <p>The list of the services we offer is below:</p>
  <ul>
    @foreach($services as $service)
	<li>
	  <p>{{ $service->title }}</p>
	  <p>{{ $service->description }}</p>		
	</li>
	@endforeach
  </ul>
@endsection