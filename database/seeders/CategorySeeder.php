<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a Faker instance to generate random data
        $faker = Faker::create();

        // Generate 10 categories
        for ($i = 0; $i < 10; $i++) {
            Category::create([
                'name' => $faker->word,
            ]);
        }
    }
}
