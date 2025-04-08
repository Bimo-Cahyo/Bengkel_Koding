<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> f66d16a (coba)
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = ['nama', 'alamat', 'no_hp', 'email', 'role', 'password'];
=======
    //
>>>>>>> f66d16a (coba)
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Pastikan field role ada jika digunakan untuk redirect
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
>>>>>>> c9393ac (ke-3)
}
