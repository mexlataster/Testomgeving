@extends('layouts.app')
@section('content')

<div class="main">
	<div class="container">
@if(!$url)
				@foreach ($users as $user)
					<a href="{{ url('userChange',$user->id) }}">{{$user->name}}</a> <br>
				@endforeach
@endif

@if($url)
<form action="{{ route('user.update', $user->id) }}" method="POST">
	Naam:<br>
	<input type="text" name="name" value="{{$user->name}}">
	 {{ csrf_field() }}
  	{{ method_field('PUT') }}﻿
  	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="Bewerk">
</form>
@endif


	</div>
</div>

@endsection