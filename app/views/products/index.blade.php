@extends('templates.main')
@section('content')
	
	<div id="content">
		
		@foreach($products as $product)
		
			<h2>{{ $product->name }}</h2>
		
		@endforeach

	</div>

@stop