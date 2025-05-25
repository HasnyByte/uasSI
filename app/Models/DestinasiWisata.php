<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DestinasiWisata extends Model
{
    protected $table = 'destinasi_wisata';
    protected $primaryKey = 'id_destinasi';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_wisata',
        'deskripsi_wisata',
        'foto_wisata',
        'lokasi_wisata',
        'jam_operasional',
        'tiket'
    ];

    // Relasi ke Review (satu destinasi bisa punya banyak review)
    public function review()
    {
        return $this->hasMany(Review::class, 'id_destinasi', 'id_destinasi');
    }
}