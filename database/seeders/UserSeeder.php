<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'nama'     => 'Dadang Setia Wardhana',
            'username'    => 'dadangsw',
            'role'    => 'admin',
            'password' => bcrypt('1234321'),
        ]);

        User::create([
            'nama'     => 'Muhammad Andreas',
            'username'    => 'andre',
            'role'    => 'guru',
            'password' => bcrypt('andre'),
        ]);

        User::create([
            'nama'     => 'Febri Housetika',
            'username'    => 'emon',
            'role'    => 'siswa',
            'password' => bcrypt('emon'),
        ]);
    }
}
