<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // Admin: Melihat semua review
    public function index()
    {
        return Review::with(['user', 'destinasiWisata', 'kuliner'])->get();
    }

    // Admin: Melihat detail satu review
    public function show($id)
    {
        $review = Review::with(['user', 'destinasiWisata', 'kuliner'])->find($id);

        if (!$review) {
            return response()->json(['message' => 'Review tidak ditemukan'], 404);
        }

        return response()->json($review);
    }

    // User: Membuat review
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'komentar' => 'nullable|string',
            'tanggal_review' => 'required|date',
            'id_user' => 'required|exists:users,id_user',
            'id_destinasi' => 'nullable|exists:destinasi_wisata,id_destinasi',
            'id_kuliner' => 'nullable|exists:kuliners,id_kuliner',
        ]);

        // Validasi hanya satu FK yang terisi
        if ($request->filled('id_destinasi') && $request->filled('id_kuliner')) {
            return response()->json(['message' => 'Review hanya boleh untuk satu jenis objek (destinasi atau kuliner)'], 422);
        }

        if (!$request->filled('id_destinasi') && !$request->filled('id_kuliner')) {
            return response()->json(['message' => 'Review harus memiliki salah satu tujuan (destinasi atau kuliner)'], 422);
        }

        $review = Review::create($request->all());

        return response()->json($review, 201);
    }
}
