<?php

namespace App\Http\Controllers;

use App\Models\DestinasiWisata;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Ambil semua wisata dengan rating rata-rata, urut dari yang tertinggi
        $wisataWithRating = DestinasiWisata::withAvg('review', 'rating')
            ->orderByDesc('review_avg_rating')
            ->get();

        // Ambil wisata rating tertinggi untuk hero
        $heroWisata = $wisataWithRating->first();

        // Ambil wisata populer selain hero (misal tampilkan 4 wisata)
        $popularWisata = $wisataWithRating->skip(1)->take(4);

        // Ambil semua kuliner dengan rating rata-rata, urut dari yang tertinggi
        $kulinerWithRating = Kuliner::withAvg('review', 'rating')
            ->orderByDesc('review_avg_rating')
            ->get();

        // Ambil kuliner populer (misal tampilkan 4 wisata)
        $popularKuliner = $kulinerWithRating->take(4);

        return view('users.home', [
            'heroWisata' => $heroWisata,
            'popularWisata' => $popularWisata,
            'popularKuliner' => $popularKuliner,
        ]);
    }
}
