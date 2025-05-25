<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    // EXISTING METHODS (API) - Tidak diubah
    
    // Admin: Melihat semua review (API)
    public function index()
    {
        return Review::with(['user', 'destinasi', 'kuliner'])->get();
    }

    // Admin: Melihat detail satu review (API)
    public function show($id)
    {
        $review = Review::with(['user', 'destinasi', 'kuliner'])->find($id);

        if (!$review) {
            return response()->json(['message' => 'Review tidak ditemukan'], 404);
        }

        return response()->json($review);
    }

    // User: Membuat review (API)
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|numeric|min:1|max:5',
            'komentar' => 'nullable|string',
            'tanggal_review' => 'required|date',
            'id_destinasi' => 'nullable|exists:destinasi_wisata,id_destinasi',
            'id_kuliner' => 'nullable|exists:kuliner,id_kuliner',
        ]);

        if ($request->filled('id_destinasi') && $request->filled('id_kuliner')) {
            return response()->json(['message' => 'Review hanya boleh untuk satu jenis objek (destinasi atau kuliner)'], 422);
        }

        if (!$request->filled('id_destinasi') && !$request->filled('id_kuliner')) {
            return response()->json(['message' => 'Review harus memiliki salah satu tujuan'], 422);
        }

        $review = Review::create([
            'rating' => $request->rating,
            'komentar' => $request->komentar,
            'tanggal_review' => $request->tanggal_review,
            'id_destinasi' => $request->id_destinasi,
            'id_kuliner' => $request->id_kuliner,
            'id_user' => auth()->user()->id_user, // ambil dari user yang login
        ]);

        return response()->json(['success' => true, 'review' => $review], 201);
    }

    // NEW METHODS - Untuk Admin Web Interface

    /**
     * Menampilkan halaman admin review (Web Interface)
     */
    public function adminIndex(Request $request)
    {
        try {
            $query = Review::with(['user', 'destinasi', 'kuliner'])
                           ->orderBy('tanggal_review', 'desc');

            // Search functionality
            if ($request->has('search') && $request->search != '') {
                $searchTerm = $request->search;
                $query->where(function ($q) use ($searchTerm) {
                    $q->where('komentar', 'like', "%{$searchTerm}%")
                      ->orWhereHas('user', function ($userQuery) use ($searchTerm) {
                          $userQuery->where('nama_user', 'like', "%{$searchTerm}%");
                      })
                      ->orWhereHas('destinasi', function ($destinasiQuery) use ($searchTerm) {
                          $destinasiQuery->where('nama_destinasi', 'like', "%{$searchTerm}%");
                      })
                      ->orWhereHas('kuliner', function ($kulinerQuery) use ($searchTerm) {
                          $kulinerQuery->where('nama_kuliner', 'like', "%{$searchTerm}%");
                      });
                });
            }

            // Pagination
            $reviews = $query->paginate(10);

            return view('admin.review', compact('reviews'));

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat memuat data review: ' . $e->getMessage());
        }
    }

    /**
     * Menghapus review dari admin panel
     */
    public function destroy($id)
    {
        try {
            $review = Review::find($id);
            
            if (!$review) {
                return back()->with('error', 'Review tidak ditemukan');
            }

            $review->delete();
            return back()->with('success', 'Review berhasil dihapus');

        } catch (\Exception $e) {
            return back()->with('error', 'Terjadi kesalahan saat menghapus review: ' . $e->getMessage());
        }
    }
}