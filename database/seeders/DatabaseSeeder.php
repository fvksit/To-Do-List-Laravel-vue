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
            AttachmentSeeder::class,
            ActivityFeedSeeder::class,
            CategorySeeder::class,
            CommentSeeder::class,
            NotificationSeeder::class,
            ReminderSeeder::class,
            SubtaskSeeder::class,
            TagSeeder::class,
            TaskAssignmentSeeder::class,
            TaskCategorySeeder::class,
            TaskDeadlineSeeder::class,
            TaskLogSeeder::class,
            TaskSeeder::class,
            TaskTagSeeder::class,
        ]);
    }
}
