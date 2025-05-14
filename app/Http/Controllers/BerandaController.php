<?php

namespace App\Http\Controllers;

use App\Models\DestinasiWisata;
use App\Models\Kuliner;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Destinasi dengan rating tertinggi
        $topDestinasi = DestinasiWisata::withAvg('reviews', 'rating')
            ->orderByDesc('reviews_avg_rating')
            ->take(16)
            ->get();

        // Kuliner dengan rating tertinggi
        $topKuliner = Kuliner::withAvg('reviews', 'rating')
            ->orderByDesc('reviews_avg_rating')
            ->take(16)
            ->get();

        return view('beranda', compact('topDestinasi', 'topKuliner'));
    }
}
