<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=> 'Zoemohamed',
            'email' => 'zoemoh@gmail.com',
            'password'=> bcrypt('457899'),
            'kelas_id'=> 21
        ]);

        User::create([
            'username'=> 'DwiArya',
            'email' => 'dwick@gmail.com',
            'password'=> bcrypt('3433'),
            'kelas_id'=> 21
        ]);

        User::create([
            'username'=> 'Admin',
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('admin10'),
            'kelas_id'=> null
        ]);
    }
}
