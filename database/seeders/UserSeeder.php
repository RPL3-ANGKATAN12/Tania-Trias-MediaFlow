<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->updateOrInsert(
            ['email' => 'anggota@media'],
            [
                'name' => 'Anggota MediaFlow',
                'password' => Hash::make('anggota123'),
                'role' => 'anggota',
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );

        DB::table('users')->updateOrInsert(
            ['email' => 'admin@media'],
            [
                'name' => 'Admin MediaFlow',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'updated_at' => now(),
                'created_at' => now(),
            ]
        );
    }
}