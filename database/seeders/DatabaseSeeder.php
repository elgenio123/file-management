<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        \App\Models\Category::factory(25)->create();
        \App\Models\Department::factory(10)->create();
        \App\Models\Document::factory(50)->create();
        \App\Models\Comment::factory(15)->create();
        \App\Models\Log::factory(5)->create();
    }
}
