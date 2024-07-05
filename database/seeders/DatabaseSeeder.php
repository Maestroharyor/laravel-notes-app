<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\RandomQuote;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' => bcrypt('test@test.com'),
        ]);

        Note::factory(100)->create();

        RandomQuote::factory(31)->create();
    }
}
