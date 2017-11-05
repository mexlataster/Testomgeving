@extends('layouts.app')
@section('content')

<div class="main">
	<div class="container">
		<form>
			<select>
				@foreach ($users as $user)
					<option><a href="google.com"> {{$user->name}}</a></option>
				@endforeach
			</select>
		</form>
	</div>
</div>

@endsection