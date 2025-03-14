<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Comment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            Comment::create([
                'task_id' => $faker->numberBetween(1, 20),
                'user_id' => $faker->numberBetween(1, 10),
                'comment_text' => $faker->paragraph,
                'created_at' => now(),
            ]);
        }
    }
}
