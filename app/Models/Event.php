<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'events';
    protected $primaryKey = 'id_event';

    protected $fillable = [
        'id_event',
        'nama_event',
        'flyer_event',
        'tanggal_event',
        'lokasi_event',
        'harga_tiket',
        'location_id',
        'id_admin',
    ];

    // Relasi ke Admin (Many-to-One)
    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin');
    }
}