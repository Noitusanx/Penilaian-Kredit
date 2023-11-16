<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{
        User::create([
            'nama'=>'admin',
            'nik'=>'1234567891012345',
            'is_admin'=> '1',
            'password'=>bcrypt('admin')
        ]);
    }
}