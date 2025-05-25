<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admins';
    protected $primaryKey = 'id_admin';
    public $timestamps = true;

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
