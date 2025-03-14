<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TaskCategory;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TaskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            TaskCategory::create([
                'task_id' => $faker->numberBetween(1, 20),
                'category_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
