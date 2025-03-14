<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            User::create([
                'username' => $faker->userName,
                'email' => $faker->unique()->email,
                'password_hash' => bcrypt('password'),
                'role' => $faker->randomElement(['admin', 'anggota']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
