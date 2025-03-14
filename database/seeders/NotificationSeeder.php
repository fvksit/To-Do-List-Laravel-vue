<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Notification;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Notification::create([
                'user_id' => $faker->numberBetween(1, 10),
                'task_id' => $faker->numberBetween(1, 20),
                'notification_type' => $faker->randomElement(['pengingat', 'perubahan status']),
                'notification_text' => $faker->sentence,
                'created_at' => now(),
            ]);
        }
    }
}
