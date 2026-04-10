<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Bikin akun Finance super buat testing API
        Employee::create([
            'name' => 'Brok Admin',
            'join_date' => '2026-01-01',
            'birth_date' => '1995-05-20',
            'address' => 'Jl. Pahlawan No. 123, Depok',
            'email' => 'admin@garasibmw.com',
            'password' => Hash::make('password123'), // Ini yang krusial, harus di-hash!
            'role' => 'admin',
            'base_salary' => 8000000,
            'status' => true,
        ]);

        // Lu bisa tambahin akun mekanik atau admin lain di bawah sini nanti kalau butuh
    }
}
