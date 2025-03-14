<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Reminder;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            Reminder::create([
                'task_id' => $faker->numberBetween(1, 20),
                'reminder_time' => $faker->dateTimeThisYear,
                'reminder_type' => $faker->randomElement(['email', 'notifikasi aplikasi']),
                'created_at' => now(),
            ]);
        }
    }
}
