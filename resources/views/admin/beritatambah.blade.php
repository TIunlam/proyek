@extends('_layout.dashboard')

@section('isi')

<h3>Tambah Laboratorium</h3>

	<hr />

<form action="#" method="POST" enctype=multipart/form-data>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>Judul</label>
	<input style="width:600px" name="judul" type="text">
</br>
	<label>Isi Berita</label>
	<textarea name="isi"> </textarea>
</br>
	<input type="file" name="gambar"><br/>
	<input type="submit" value="save">
</form>
<ul>
	@foreach ($errors->all() as $error)
	<li>{{ $error}}</li>
	@endforeach
</ul>
@stop