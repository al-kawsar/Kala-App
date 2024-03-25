<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $totalRecords = 1_000_000;
        $batchSize = 5; // Adjust the batch size as needed

        $postChunks = ceil($totalRecords / $batchSize);
        for ($i = 0; $i < $postChunks; $i++) {
            Post::factory($batchSize)->create();
        }
    }
}
