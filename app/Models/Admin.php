<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';
    public $timestamps = false;

    protected $fillable = [
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi ke Event
    public function events()
    {
        return $this->hasMany(Event::class, 'id_admin');
    }
}
