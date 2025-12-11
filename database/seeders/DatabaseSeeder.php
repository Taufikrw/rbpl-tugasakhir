<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            GuruSeeder::class,
            SiswaSeeder::class,
            KelasSeeder::class,
            MapelSeeder::class,
        ]);
        
        User::create([
            'username' => 'admin',
            'password' => bcrypt('asdf1234'),
            'role_id' => 1,
        ]);
    }
}
