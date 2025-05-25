<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'users'; // Nama tabel di database
    protected $primaryKey = 'id_user'; // Kolom primary key

    public $timestamps = true;

    protected $fillable = [
        'nama_user',
        'email_user',
        'password_user',
    ];

    protected $hidden = [
        'password_user',
    ];

    public function getAuthPassword()
    {
        return $this->password_user;
    }

    public function username()
    {
        return 'email_user';
    }
}
