@extends('layouts.app')

@section('content')

<ul>
@foreach ($user->roles as $role)
<li>{{$role}}</li>
@endforeach
</ul>
@php
	var_dump($user);
@endphp
@endsection