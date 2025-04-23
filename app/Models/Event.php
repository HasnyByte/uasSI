<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $primaryKey = 'id_event';

    protected $fillable = [
        'nama_event',
        'deskripsi_event',
        'flyer_event',
        'lokasi_event',
        'harga_tiket',
        'id_admin',
    ];

    // Relasi ke Admin (Many-to-One)
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}
