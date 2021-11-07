<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Petugas::create([
            'nama_Petugas' => 'Administrator',
            'email' => 'admin@kominfo.go.id',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'telp' => '085299116574',
            'level' => 'admin',
        ]);
    }
}
