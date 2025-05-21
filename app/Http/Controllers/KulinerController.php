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
        $kuliner = Kuliner::where('id_kuliner', $id)->first();

        if (!$kuliner) {
            return response()->json(['message' => 'Kuliner tidak ditemukan'], 404);
        }

        $otherKuliner = Kuliner::where('id_kuliner', '!=', $id)
                ->inRandomOrder()
                ->limit(6)
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
}
