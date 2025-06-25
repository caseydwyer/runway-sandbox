<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory()->count(5)->create();
        Note::factory()->count(20)->create();
    }
}
