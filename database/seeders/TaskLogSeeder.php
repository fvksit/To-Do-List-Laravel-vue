<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TaskLog;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TaskLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            TaskLog::create([
                'task_id' => $faker->numberBetween(1, 20),
                'status_from' => $faker->randomElement(['belum selesai', 'selesai', 'ditunda']),
                'status_to' => $faker->randomElement(['belum selesai', 'selesai', 'ditunda']),
                'changed_by' => $faker->numberBetween(1, 10),
                'changed_at' => now(),
                'comment' => $faker->sentence,
            ]);
        }
    }
}
