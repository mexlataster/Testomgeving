@extends('layouts.app')

@section('content')


@foreach ($users as $user)
  Naam: {{$user->name}}<br>
  Achternaam: {{$user->lastname}}<br>
  Adres: {{$user->adres}}<br>
  Woonplaats: {{$user->woontplaats}}<br>
@endforeach


@endsection