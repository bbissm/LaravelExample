@extends('layouts.app')

@section('content')
	<div class="inner-container">
	    {{-- Comes from PagesController Function Index --}}
	    <h1>{{$test}}</h1>
	    <hr>
	    @if(count($services) > 0)
	        <ul class="list-group">
	            @foreach ($services as $service)
	                <li class="list-group-item">{{$service}}</li>
	            @endforeach
	        </ul>
	    @endif
	    <hr>
	    <h1>Welcome To my First Laravel Project</h1>
	</div>

@endsection
