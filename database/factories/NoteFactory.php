<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Note>
 */
class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->bothify('??????#############'),
            'author_id' => Author::inRandomOrder()->first(),
            'title' => Str::title(fake()->words(3, true)),
            'content' => fake()->sentences(3, true),
        ];
    }
}
