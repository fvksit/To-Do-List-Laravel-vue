<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Subtask;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SubtaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            Subtask::create([
                'task_id' => $faker->numberBetween(1, 20),
                'title' => $faker->sentence,
                'status' => $faker->randomElement(['belum selesai', 'selesai']),
                'due_date' => $faker->dateTimeThisYear,
                'created_at' => now(),
            ]);
        }
    }
}
