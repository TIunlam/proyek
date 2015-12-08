@extends('_layout.default')

@section('title','Home')

@section('judul')
    <h1>ini halaman depan</h1>
@stop

@section('isi')
    <h2>Ini isi halaman depan</h2>
    <button type="button" class="small round button" ><a href="{{ route('getLogin') }}">Login</a></button>
    <a href="{{ route('getRegister') }}">Reg</a>
@stop