
@extends('_layout.dashboard')

@section('isi')

<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error}}</li>
	@endforeach
</ul>
@stop