<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TaskAssignment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TaskAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            TaskAssignment::create([
                'task_id' => $faker->numberBetween(1, 20),
                'assigned_user_id' => $faker->numberBetween(1, 10),
                'assigned_at' => now(),
                'due_date' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
