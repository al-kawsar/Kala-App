<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Tech',
            'Programming',
            'Networking',
            'CyberSecurity',
            'DevOps'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $slug = $category,
                'slug' => str()->slug($slug),
            ]);
        }
    }
}
