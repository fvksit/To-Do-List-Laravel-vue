<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\TaskCategoryController;
use App\Http\Controllers\Api\SubtaskController;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\ReminderController;
use App\Http\Controllers\Api\TaskLogController;
use App\Http\Controllers\Api\TaskDeadlineController;
use App\Http\Controllers\Api\TagController;
use App\Http\Controllers\Api\TaskTagController;
use App\Http\Controllers\Api\TaskAssignmentController;
use App\Http\Controllers\Api\AttachmentController;
use App\Http\Controllers\Api\NotificationController;
use App\Http\Controllers\Api\ActivityFeedController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->middleware(['auth:sanctum'])->group(function () {
    // User Routes
    Route::apiResource('users', UserController::class);

    // Category Routes
    Route::apiResource('categories', CategoryController::class);

    // Task Routes
    Route::apiResource('tasks', TaskController::class);

    // TaskCategory Routes
    Route::apiResource('task-categories', TaskCategoryController::class);

    // Subtask Routes
    Route::apiResource('subtasks', SubtaskController::class);

    // Comment Routes
    Route::apiResource('comments', CommentController::class);

    // Reminder Routes
    Route::apiResource('reminders', ReminderController::class);

    // TaskLog Routes
    Route::apiResource('task-logs', TaskLogController::class);

    // TaskDeadline Routes
    Route::apiResource('task-deadlines', TaskDeadlineController::class);

    // Tag Routes
    Route::apiResource('tags', TagController::class);

    // TaskTag Routes
    Route::apiResource('task-tags', TaskTagController::class);

    // TaskAssignment Routes
    Route::apiResource('task-assignments', TaskAssignmentController::class);

    // Attachment Routes
    Route::apiResource('attachments', AttachmentController::class);

    // Notification Routes
    Route::apiResource('notifications', NotificationController::class);

    // ActivityFeed Routes
    Route::apiResource('activity-feeds', ActivityFeedController::class);
});
