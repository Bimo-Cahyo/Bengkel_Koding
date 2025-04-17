<?php

<<<<<<< HEAD

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


=======
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
<<<<<<< HEAD
        [
            'name' => 'Bimo',
            'alamat' => 'Jl You',
            'no_hp' => '085895234567',
            'role' => 'dokter',
            'email' => 'bimo@gmail.com',
            'password' => 'password'
        ],
[
            'name' => 'Isul',
            'alamat' => 'Jl itu',
            'no_hp' => '087654321',
            'role' => 'pasien',
            'email' => 'isul@gmail.com',
            'password' => 'password'
        ],
        ];
        foreach($data as $d){
            User::create([
                'name' => $d['name'],
                'alamat' => $d['alamat'],
                'no_hp' => $d['no_hp'],
                'role' => $d['role'],
                'email' => $d['email'],
                'password' => $d['password'],
            ]);
=======
            [
                'name' => 'Bimo',
                'alamat' => 'Jl Todak',
                'no_hp' => '0875555233789',
                'role' => 'dokter',
                'email' => 'bimo123@gmail.com',
                'password' => bcrypt('password') // Enkripsi password
            ],
            [
                'name' => 'sila',
                'alamat' => 'Jl Sials',
                'no_hp' => '087654327251',
                'role' => 'pasien',
                'email' => 'sila@gmail.com',
                'password' => bcrypt('password') // Enkripsi password
            ],
        ];

        foreach ($data as $d) {
            User::create($d);
>>>>>>> b41c6c041eaf98c93b1d1f1ef13d38bff0ae2409
        }
    }
}
