<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Task::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'due_date' => $faker->dateTimeThisYear,
                'status' => $faker->randomElement(['belum selesai', 'selesai', 'ditunda']),
                'priority' => $faker->randomElement(['rendah', 'sedang', 'tinggi']),
                'created_at' => now(),
                'updated_at' => now(),
                'assigned_to' => $faker->numberBetween(1, 10),
                'created_by' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
