<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
        ]);

        // Seed categories
        \App\Models\Category::create(['name' => 'Berita']);
        \App\Models\Category::create(['name' => 'Pengumuman']);
        \App\Models\Category::create(['name' => 'Kegiatan']);
        \App\Models\Category::create(['name' => 'Tips & Trik']);
    }
}
