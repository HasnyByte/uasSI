<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DestinasiWisata;
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
}
