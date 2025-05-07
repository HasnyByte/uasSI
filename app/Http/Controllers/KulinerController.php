<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    // Dummy data
    private $kuliners = [
        [
            'id_kuliner' => 1,
            'nama_kuliner' => 'Sate Matang Apaleh Geurugok',
            'deskripsi_makanan' => 'Sate autentik Aceh dengan bumbu rempah khas, disajikan dengan kuah kacang.',
            'lokasi_kuliner' => 'Batoh, Lueng Bata, Banda Aceh City, Aceh 23122',
            'foto_kuliner' => 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg',
            'jam_operasional' => 'Setiap Hari, Buka 24 jam',
            'thumbnails' => [
                'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg',
                'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg',
                'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg',
                'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1563241974/rblfa5gswdfbyurtvjme.jpg',
            ],
            'reviews' => [
                [
                    'user' => 'Khalishadz',
                    'rating' => 4.9,
                    'komentar' => 'Satenya enak, ga alot dan berempah. Pelayanannya juga bagus dan tempatnya bersih.',
                    'tanggal_review' => '17 - 04 - 2022',
                ],
                [
                    'user' => 'ronaldowati',
                    'rating' => 4.9,
                    'komentar' => 'Rasanya autentik, bumbunya terasa, mantap!',
                    'tanggal_review' => '16 - 04 - 2022',
                ],
            ],
            'rating_distribution' => [
                5 => 90,
                4 => 10,
                3 => 0,
                2 => 0,
                1 => 0,
            ],
            'metrics' => [
                'cleanliness' => 4.9,
                'accuracy' => 4.9,
                'communication' => 4.9,
                'location' => 4.8,
                'value' => 4.8,
            ],
            'rating' => 4.9,
        ],
        [
            'id_kuliner' => 2,
            'nama_kuliner' => 'Mie Aceh Razali',
            'deskripsi_makanan' => 'Mie Aceh dengan cita rasa pedas dan rempah khas.',
            'lokasi_kuliner' => 'Banda Aceh',
            'foto_kuliner' => 'https://thumb.viva.co.id/media/frontend/thumbs3/2022/04/05/624c501348902-mie-aceh_1265_711.jpg',
            'jam_operasional' => '10:00 - 22:00',
            'thumbnails' => [
                'https://thumb.viva.co.id/media/frontend/thumbs3/2022/04/05/624c501348902-mie-aceh_1265_711.jpg',
                'https://thumb.viva.co.id/media/frontend/thumbs3/2022/04/05/624c501348902-mie-aceh_1265_711.jpg',
            ],
            'reviews' => [
                [
                    'user' => 'User1',
                    'rating' => 4.6,
                    'komentar' => 'Mie Acehnya pedas mantap!',
                    'tanggal_review' => '01 - 05 - 2022',
                ],
            ],
            'rating_distribution' => [
                5 => 60,
                4 => 30,
                3 => 10,
                2 => 0,
                1 => 0,
            ],
            'metrics' => [
                'cleanliness' => 4.7,
                'accuracy' => 4.6,
                'communication' => 4.8,
                'location' => 4.7,
                'value' => 4.6,
            ],
            'rating' => 4.6,
        ],
        
    ];

    // Ambil semua kuliner
    public function index()
    {
        return view('users.kuliner', ['kuliners' => $this->kuliners]);
    }

    // Ambil satu kuliner berdasarkan ID
    public function show($id)
    {
        $kuliner = collect($this->kuliners)->firstWhere('id_kuliner', $id);

        if (!$kuliner) {
            abort(404, 'Kuliner tidak ditemukan');
        }

        // Get other kuliners for "Kuliner Lainnya" section
        $other_kuliners = collect($this->kuliners)->where('id_kuliner', '!=', $id)->take(2);

        return view('users.kuliner_detail', [
            'kuliner' => $kuliner,
            'other_kuliners' => $other_kuliners,
        ]);
    }
}