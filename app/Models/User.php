<?php

namespace App\Models;

<<<<<<< HEAD
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
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
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
<<<<<<< HEAD
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
=======
    use Notifiable;

>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
    protected $fillable = [
        'name',
        'email',
        'password',
<<<<<<< HEAD
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
=======
        'role', // Pastikan field role ada jika digunakan untuk redirect
    ];

>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
    protected $hidden = [
        'password',
        'remember_token',
    ];
<<<<<<< HEAD

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
=======
>>>>>>> c9393ac (ke-3)
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
}
