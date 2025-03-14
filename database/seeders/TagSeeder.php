<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            Tag::create([
                'tag_name' => $faker->word,
                'created_at' => now(),
            ]);
        }
    }
}
