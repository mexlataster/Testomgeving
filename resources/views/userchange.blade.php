@extends('layouts.app')

@section('content')


@if(!$url)
				@foreach ($users as $user)
					<a href="{{ url('userChange',$user->id) }}">{{$user->name}}</a> <a class="" href="{{ route('user.delete', $user->id) }}"><span class="red-delete">X</span></a><br>
				@endforeach
@endif

@if($url)
<form action="{{ route('user.update', $user->id) }}" method="POST">
	Naam:<br>
	<input type="text" name="name" value="{{$user->name}}"><br>
	Achternaam: <br>
	<input type="text" name="lastname" value="{{$user->lastname}}"><br>
	Adres: <br>
	<input type="text" name="adres" value="{{$user->adres}}"><br>

	 {{ csrf_field() }}
  	{{ method_field('PUT') }}﻿
  	<input type="hidden" name="_method" value="PUT">
	<input type="submit" value="Bewerk">
</form>
@endif

@endsection