@extends('_layout.default')

@section('title','Berita')

@section('judul')
    <h1>ini halaman berita</h1>
@stop

@section('isi')
	@parent
    <h2>Ini isi halaman berita</h2>
    @foreach ($daftar as $berita) 
    	<li>{{ $berita->slug}}</li>
    @endforeach

@stop