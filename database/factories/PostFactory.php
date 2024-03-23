<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $title = $this->faker->sentence,
            "slug" => str()->slug($title),
            "body" => $this->faker->paragraph(1000),
            "author" => $this->faker->firstName(),
            "published" => $this->faker->dateTime(now()),
        ];
    }
}
