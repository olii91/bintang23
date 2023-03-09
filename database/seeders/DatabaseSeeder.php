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
            'nama_petugas' => 'Almira Sechrakova',
            'username' => 'miraa',
            'password' => Hash::make('12345678'),
            'telp' => '081234567890',
            'level' => 'admin',
        ]);
    }
}
