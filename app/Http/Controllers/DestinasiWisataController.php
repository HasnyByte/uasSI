<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DestinasiWisata;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    // Menampilkan semua destinasi wisata
    public function index()
    {
        $destinasi = DestinasiWisata::all();
        return response()->json($destinasi);
    }

    // Menampilkan detail destinasi wisata berdasarkan id
    public function show($id)
    {
        $destinasi = DestinasiWisata::find($id);

        if (!$destinasi) {
            return response()->json(['message' => 'Destinasi tidak ditemukan'], 404);
        }

        return response()->json($destinasi);
    }
}
