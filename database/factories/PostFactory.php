<?php

namespace Database\Factories;

use App\Models\User;
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
        $totalUsers = User::count();
        if ($totalUsers > 0) {
            return [
                "title" => $title = $this->faker->sentence,
                "slug" => str()->slug($title),
                "body" => $this->faker->paragraph(1000),
                "user_id" => '',
                "published" => $this->faker->dateTime(now()),
            ];
        }
        return [];
    }
}
