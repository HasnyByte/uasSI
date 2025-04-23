<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'review';
    protected $primaryKey = 'id_review';
    public $timestamps = false;

    protected $fillable = [
        'rating',
        'komentar',
        'tanggal_review',
        'id_user',
        'id_destinasi',
        'id_kuliner'
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    // Relasi ke Destinasi Wisata (optional)
    public function destinasi()
    {
        return $this->belongsTo(DestinasiWisata::class, 'id_destinasi');
    }

    // Relasi ke Kuliner (optional)
    public function kuliner()
    {
        return $this->belongsTo(Kuliner::class, 'id_kuliner');
    }
}
