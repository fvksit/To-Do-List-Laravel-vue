<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ActivityFeed;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ActivityFeedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            ActivityFeed::create([
                'user_id' => $faker->numberBetween(1, 10),
                'task_id' => $faker->numberBetween(1, 20),
                'activity_type' => $faker->randomElement(['tugas dibuat', 'status diubah']),
                'activity_description' => $faker->sentence,
                'created_at' => now(),
            ]);
        }
    }
}
