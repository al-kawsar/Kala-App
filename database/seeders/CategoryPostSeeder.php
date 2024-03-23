<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::pluck('id')->toArray();
        $posts = Post::pluck('id')->toArray();
        $insertedPairs = [];

        for ($i = 0; $i < 1000; $i++) {
            $categoryId = rand(1, count($categories) - 1);
            $postId = rand(1, count($posts) - 1);

            // Periksa apakah pasangan sudah ada
            if (!in_array([$categoryId, $postId], $insertedPairs)) {
                // Masukkan ke dalam array dan tabel jika belum ada
                $insertedPairs[] = [$categoryId, $postId];

                DB::table('category_post')->insert([
                    'category_id' => $categoryId,
                    'post_id' => $postId,
                ]);
            }
        }
    }

    /**
     * Get a unique random value from the given array.
     *
     * @param  array  $array
     * @return mixed
     */
    protected function getUniqueRandom($array)
    {
        return $array[array_rand(array_unique($array))];
    }
}
