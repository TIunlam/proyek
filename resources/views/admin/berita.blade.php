@extends('_layout.dashboard')

@section('isi')

<a class="btn btn-success" href="{{ route('beritatambah')}}"><i class="fa fa-bar-chart-o fa-3x"></i>Tambah Berita</a>

<h3>berita</h3>


    <hr />

    @if (Session::has('pesan'))
    <h4>{{ Session::get('pesan') }}</h4>
    @endif

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
               
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Di buat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    	@foreach($berita as $beritas)

                                        <tr class="odd gradeX">
                                            <td>{!! $beritas->judul !!}</td>
                                            <td>{!! $beritas->isi !!}</td>
                                            <td>{{  $beritas->created_at->format('d-m-o') }}</td>
                                            <td><form method="POST" action="#" accept-charset="UTF-8" style="margin:0 auto">
                                        <input name="_method" type="hidden" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
                                        <input id="confirm" class="btn btn-danger" data-toggle="confirmation" data-popout="true" type="submit" value="Delete">
<a class="btn btn-danger" href="#">Edit</a>
</form>
</td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->

    @if(Session::has('error'))
<h3>{{Session::get('error') }}</h3>

@endif
<ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>

@stop