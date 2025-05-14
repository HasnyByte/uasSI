<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;
use App\Models\User;
use App\Models\DestinasiWisata;
use App\Models\Kuliner;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::pluck('id_user')->toArray(); // Ambil semua ID user

        // Review untuk destinasi
        foreach (DestinasiWisata::all() as $destinasi) {
            for ($i = 0; $i < 3; $i++) {
                Review::create([
                    'rating' => rand(3, 5),
                    'komentar' => 'Review untuk destinasi ' . $destinasi->nama_wisata,
                    'tanggal_review' => now(),
                    'id_user' => fake()->randomElement($users),
                    'id_destinasi' => $destinasi->id_destinasi,
                    'id_kuliner' => null
                ]);
            }
        }

        // Review untuk kuliner
        foreach (Kuliner::all() as $kuliner) {
            for ($i = 0; $i < 3; $i++) {
                Review::create([
                    'rating' => rand(3, 5),
                    'komentar' => 'Review untuk kuliner ' . $kuliner->nama_kuliner,
                    'tanggal_review' => now(),
                    'id_user' => fake()->randomElement($users),
                    'id_destinasi' => null,
                    'id_kuliner' => $kuliner->id_kuliner
                ]);
            }
        }
    }
}
