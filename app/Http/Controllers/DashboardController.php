<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Berita;

class DashboardController extends Controller
{
	 public function __construct()
	{
        $this->middleware('auth');
    }
    public function index()
    {
    	return view('admin.index');
    }

    public function beritaview()
    {
    	$berita = berita::orderBy('id','desc')->get();	
    	return view('admin.berita',compact('berita'));
    }

     public function beritatambah()
    {
    	return view('admin.beritatambah');
    }
}
