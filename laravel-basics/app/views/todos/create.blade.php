@extends('layouts.main')
@section('content')
	{{Form::open(array('route' => 'todos.store'))}}
		{{Form::label('title', "List Title")}}
		{{Form::text('title')}}
		{{Form::submit('Submit', array('class' => 'button'))}}
	{{Form::close()}}
	<!-- <form method="POST" action="http://homestead.app/todos" accept-charset="UTF-8">
		<label for="title"> List Title </label>
		<input name="title" type="text" id="title">
		<input class="button" type="submit" value="submit">
	</form> -->
@stop