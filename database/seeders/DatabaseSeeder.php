<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Hero;
use App\Models\About;
use App\Models\Experience;
use App\Models\Partner;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // keep a test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // demo content for the single-page site
        Hero::factory()->create();
        About::factory()->create();
        Experience::factory()->count(4)->create();
        Partner::factory()->count(4)->create();
    }
}
