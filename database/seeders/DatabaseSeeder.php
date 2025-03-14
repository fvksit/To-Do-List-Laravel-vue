<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            TaskSeeder::class,
            SubtaskSeeder::class,
            TaskCategorySeeder::class,
            TaskTagSeeder::class,
            TaskAssignmentSeeder::class,
            TaskDeadlineSeeder::class,
            ReminderSeeder::class,
            CommentSeeder::class,
            NotificationSeeder::class,
            TaskLogSeeder::class,
            AttachmentSeeder::class,
            ActivityFeedSeeder::class,
        ]);
    }
}
