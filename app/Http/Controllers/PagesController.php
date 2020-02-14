<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function home()
    {
        return view('index',['nama'=> 'Silahkan Ke Halaman Selanjutnya']);
    }
    public function about()
    {
        return view('about',  ['nama'=> 'Halaman Selanjutnya']);
    }
}
