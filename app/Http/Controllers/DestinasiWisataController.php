<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DestinasiWisata;
use App\Models\Review;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    // Mapping kategori (bisa juga dijadikan konstanta)
    private const KATEGORI_MAP = [
        'budaya'    => 'DBW',
        'rekreasi'  => 'DRK',
        'alam'      => 'DAT',
        'olahraga'  => 'DOA',
        'hiburan'   => 'DBH',
    ];

    /**
     * API: Menampilkan semua destinasi wisata, atau berdasarkan kategori (dalam format JSON).
     */
    public function index(Request $request)
    {
        $kategoriInput = $request->query('kategori');

        if ($kategoriInput && isset(self::KATEGORI_MAP[$kategoriInput])) {
            $kode = self::KATEGORI_MAP[$kategoriInput];
            $data = DestinasiWisata::where('id_destinasi', 'like', $kode . '%')->get();
        } else {
            $data = DestinasiWisata::all();
        }

        return response()->json($data);
    }

    /**
     * Web: Menampilkan detail destinasi wisata berdasarkan ID.
     */
    public function show($id)
    {
        $wisata = DestinasiWisata::where('id_destinasi', $id)->first();

        if (!$wisata) {
            abort(404); // Data tidak ditemukan
        }

        // Ambil 2 review dengan rating tertinggi secara acak
        $topReviews = $this->getTopReviews($id, 2);
        
        // Set relasi review ke wisata object
        $wisata->setRelation('review', $topReviews);

        $otherDestinations = DestinasiWisata::where('id_destinasi', '!=', $id)
                        ->inRandomOrder()
                        ->limit(3)
                        ->get();

        return view('users.detailWisata', compact('wisata', 'otherDestinations'));
    }

    /**
     * Web: Menampilkan daftar wisata berdasarkan kategori & pencarian (untuk halaman user).
     */
    public function listWisata(Request $request)
    {
        $kategoriInput = $request->query('kategori');
        $search = $request->query('search');

        $query = DestinasiWisata::query();

        // Filter berdasarkan kategori jika valid
        if ($kategoriInput && isset(self::KATEGORI_MAP[$kategoriInput])) {
            $kodeKategori = self::KATEGORI_MAP[$kategoriInput];
            $query->where('id_destinasi', 'like', $kodeKategori . '%');
        }

        // Filter berdasarkan keyword nama wisata
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_wisata', 'like', '%' . $search . '%');
            });
        }

        // Ambil data dengan pagination
        $wisata = $query->paginate(12);

        return view('users.wisata', compact('wisata'));
    }

    /**
     * Helper method untuk mengambil review dengan rating tertinggi
     */
    private function getTopReviews($destinasiId, $limit = 2)
    {
        try {
            // Cari rating tertinggi yang ada
            $maxRating = Review::where('id_destinasi', $destinasiId)->max('rating');
            
            if (!$maxRating) {
                return collect(); // Return empty collection jika tidak ada review
            }
            
            // Ambil review dengan rating tertinggi secara acak
            $topReviews = Review::where('id_destinasi', $destinasiId)
                               ->where('rating', $maxRating)
                               ->with('user')
                               ->inRandomOrder()
                               ->limit($limit)
                               ->get();
            
            // Jika review dengan rating tertinggi kurang dari limit yang diminta
            if ($topReviews->count() < $limit) {
                // Ambil review tambahan dengan rating tertinggi kedua, ketiga, dst
                $additionalReviews = Review::where('id_destinasi', $destinasiId)
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
     * Method untuk mendapatkan semua review destinasi (jika diperlukan di tempat lain)
     */
    public function getAllReviews($id)
    {
        try {
            $reviews = Review::where('id_destinasi', $id)
                            ->with('user')
                            ->orderBy('tanggal_review', 'desc')
                            ->get();
            
            return response()->json($reviews);
            
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal mengambil review'], 500);
        }
    }
}