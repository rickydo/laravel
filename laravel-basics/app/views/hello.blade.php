@extends('layouts.main')
@section('content')

	@if (isset($data['last_name']))
		{{{$data['last_name']}}}
	@else
		no last name set
	@endif

	@foreach ($data as $item)
		<li>{{{$item}}}</li>
	@endforeach
@stop


<!-- blade will escape user data with 3 curly brackets -->