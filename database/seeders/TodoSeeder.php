<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Get all users and categories
        $users = User::all();
        $categories = Category::all();

        // Check if there are no users or categories
        if ($users->isEmpty() || $categories->isEmpty()) {
            echo "No users or categories found. Please create users and categories first.\n";
            return;
        }


        // Add 10 dummy entries for Todo
        foreach (range(1, 10) as $index) {
            Todo::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'details' => $faker->text,
                'status' => $faker->randomElement(['not_done', 'done']),
                'category_id' => $categories->random()->id,
                'user_id' => $users->random()->id,
            ]);
        }
    }
}
