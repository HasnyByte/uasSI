<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DestinasiWisata;
use Illuminate\Http\Request;

class DestinasiWisataController extends Controller
{
    // Menampilkan semua destinasi wisata
    public function index(Request $request)
    {
        $kategoriInput = $request->query('kategori');
    
        $kategoriMap = [
            'budaya'    => 'DBW',
            'rekreasi'  => 'DRK',
            'alam'      => 'DAT',
            'olahraga'  => 'DOA',
            'hiburan'   => 'DBH',
        ];
    
        if ($kategoriInput && isset($kategoriMap[$kategoriInput])) {
            $kode = $kategoriMap[$kategoriInput];
            $data = DestinasiWisata::where('id_destinasi', 'like', $kode . '%')->get();
        } else {
            $data = DestinasiWisata::all();
        }
    
        return response()->json($data);
    }  

    // Menampilkan detail destinasi wisata berdasarkan id
    public function show($id)
    {
        $destinasi = DestinasiWisata::find($id);

        if (!$destinasi) {
            abort(404); // Tampilkan halaman 404 jika tidak ditemukan
        }

        return view('wisata.detailWisata', compact('destinasi'));
    }

    public function listWisata(Request $request)
    {
        $kategori = $request->query('kategori');
        $search = $request->query('search');
    
        $query = DestinasiWisata::query();
    
        if ($kategori) {
            $query->where('id_destinasi', 'like', $kategori . '%');
        }
    
        if ($search) {
            $query->where('nama_wisata', 'like', '%' . $search . '%');
        }
    
        $wisata = $query->paginate(12);
    
        return view('users.wisata', compact('wisata'));
    }       
}
