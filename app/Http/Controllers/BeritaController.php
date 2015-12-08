<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Berita;

class BeritaController extends Controller
{
    public function daftar_berita()
    {
       $daftar = Berita::all();
        return view('berita.daftar_berita',compact('daftar'));
    	//$daftar_berita=Berita::all();
    	//dd($daftar_berita);
    }
   
}
