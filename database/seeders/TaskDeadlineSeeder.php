<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TaskDeadline;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TaskDeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            TaskDeadline::create([
                'task_id' => $faker->numberBetween(1, 20),
                'deadline_time' => $faker->dateTimeThisYear,
                'reminder_sent' => $faker->boolean,
                'created_at' => now(),
            ]);
        }
    }
}
