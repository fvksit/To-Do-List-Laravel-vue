<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attachment;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            Attachment::create([
                'task_id' => $faker->numberBetween(1, 20),
                'file_name' => $faker->word . '.jpg',
                'file_path' => $faker->url,
                'uploaded_by' => $faker->numberBetween(1, 10),
                'created_at' => now(),
            ]);
        }
    }
}
