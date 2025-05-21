<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $table = 'kuliner';
    protected $primaryKey = 'id_kuliner';
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = [
        'nama_kuliner',
        'deskripsi_makanan',
        'lokasi_kuliner',
        'foto_kuliner',
        'jam_operasional'
    ];

    // Relasi ke Review (satu kuliner bisa punya banyak review)
    public function reviews()
    {
        return $this->hasMany(Review::class, 'id_kuliner', 'id_kuliner');
    }
}