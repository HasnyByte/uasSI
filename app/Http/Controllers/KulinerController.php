<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kuliner;
use App\Models\Review;
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
        $kuliner = Kuliner::where('id_kuliner', $id)->first();

        if (!$kuliner) {
            return response()->json(['message' => 'Kuliner tidak ditemukan'], 404);
        }

        // Ambil 2 review dengan rating tertinggi secara acak
        $topReviews = $this->getTopReviews($id, 2);
        
        // Set relasi review ke kuliner object
        $kuliner->setRelation('review', $topReviews);

        $otherKuliner = Kuliner::where('id_kuliner', '!=', $id)
                ->inRandomOrder()
                ->limit(3)
                ->get();

        return view('users.detailkuliner', compact('kuliner', 'otherKuliner'));
    }

    public function listKuliner(Request $request)
    {
        $kategori = $request->query('kategori');
        $search = $request->query('search');
    
        $query = Kuliner::query();
    
        if ($kategori) {
            $query->where('id_kuliner', 'LIKE', $kategori . '%');
        }
    
        if ($search) {
            $query->where('nama_kuliner', 'like', '%' . $search . '%');
        }
    
        $kuliner = $query->paginate(6);
    
        return view('users.kuliner', compact('kuliner', 'kategori'));
    }

    /**
     * Helper method untuk mengambil review dengan rating tertinggi untuk kuliner
     */
    private function getTopReviews($kulinerId, $limit = 2)
    {
        try {
            // Cari rating tertinggi yang ada
            $maxRating = Review::where('id_kuliner', $kulinerId)->max('rating');
            
            if (!$maxRating) {
                return collect(); // Return empty collection jika tidak ada review
            }
            
            // Ambil review dengan rating tertinggi secara acak
            $topReviews = Review::where('id_kuliner', $kulinerId)
                               ->where('rating', $maxRating)
                               ->with('user')
                               ->inRandomOrder()
                               ->limit($limit)
                               ->get();
            
            // Jika review dengan rating tertinggi kurang dari limit yang diminta
            if ($topReviews->count() < $limit) {
                // Ambil review tambahan dengan rating tertinggi kedua, ketiga, dst
                $additionalReviews = Review::where('id_kuliner', $kulinerId)
                                         ->where('rating', '<', $maxRating)
                                         ->with('user')
                                         ->orderBy('rating', 'desc')
                                         ->inRandomOrder()
                                         ->limit($limit - $topReviews->count())
                                         ->get();
                
                $topReviews = $topReviews->merge($additionalReviews);
            }
            
            return $topReviews;
            
        } catch (\Exception $e) {
            return collect(); // Return empty collection jika terjadi error
        }
    }

    /**
     * Method untuk mendapatkan semua review kuliner (jika diperlukan di tempat lain)
     */
    public function getAllReviews($id)
    {
        try {
            $reviews = Review::where('id_kuliner', $id)
                            ->with('user')
                            ->orderBy('tanggal_review', 'desc')
                            ->get();
            
            return response()->json($reviews);
            
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal mengambil review'], 500);
        }
    }
}