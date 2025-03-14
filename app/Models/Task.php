<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tasks';
    protected $fillable = ['title', 'description', 'due_date', 'status', 'priority', 'assigned_to', 'created_by'];

    // Relationship with user (assigned to)
    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    // Relationship with user (created by)
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship with categories
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Relationship with subtasks
    public function subtasks()
    {
        return $this->hasMany(Subtask::class);
    }

    // Relationship with comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Relationship with logs
    public function logs()
    {
        return $this->hasMany(TaskLog::class);
    }

    // Relationship with reminders
    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }

    // Relationship with deadlines
    public function deadline()
    {
        return $this->hasOne(TaskDeadline::class);
    }

    // Relationship with tags
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tags');
    }

    // Relationship with task assignments
    public function taskAssignments()
    {
        return $this->hasMany(TaskAssignment::class);
    }

    // Relationship with attachments
    public function attachments()
    {
        return $this->hasMany(Attachment::class);
    }

    // Relationship with notifications
    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    // Relationship with activity feeds
    public function activityFeeds()
    {
        return $this->hasMany(ActivityFeed::class);
    }
}
