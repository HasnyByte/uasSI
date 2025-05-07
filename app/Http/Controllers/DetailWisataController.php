<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataController extends Controller
{

    public function index()
    {
        return view('wisata.index');
    }


    public function detail($slug = null)
    {
        return view('wisata.detailWisata');
    }
}