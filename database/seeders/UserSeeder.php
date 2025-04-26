<?php


namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'alamat' => 'Jl You',
            'no_hp' => '085895234567',
            'role' => 'dokter',
            'email' => 'bimo@gmail.com',
            'password' => 'Bimo1234'
        ],
        [
            'name' => 'Isul',
            'alamat' => 'Jl itu',
            'no_hp' => '087654321',
            'role' => 'pasien',
            'email' => 'isul@gmail.com',
            'password' => 'password'
        ],
        [
            'name' => 'Cahyo',
            'alamat' => 'Jl Rese',
            'no_hp' => '08578241052',
            'role' => 'dokter',
            'email' => 'cahyo@gmail.com',
            'password' => 'Cahyo1234'
        ],
        [
            'name' => 'jay',
            'alamat' => 'Jl salak',
            'no_hp' => '087655528902',
            'role' => 'pasien',
            'email' => 'jay@gmail.com',
            'password' => 'jay1234'
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
        }
    }
}
