<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TaskTag;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TaskTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            TaskTag::create([
                'task_id' => $faker->numberBetween(1, 20),
                'tag_id' => $faker->numberBetween(1, 5),
            ]);
        }
    }
}
