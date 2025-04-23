<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    // Ambil semua kuliner
    public function index()
    {
        return Kuliner::all();
    }

    // Ambil satu kuliner berdasarkan ID
    public function show($id)
    {
        $kuliner = Kuliner::find($id);

        if (!$kuliner) {
            return response()->json(['message' => 'Kuliner tidak ditemukan'], 404);
        }

        return response()->json($kuliner);
    }
}
