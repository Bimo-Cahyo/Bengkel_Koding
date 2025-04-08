<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
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
        }
    }
}
