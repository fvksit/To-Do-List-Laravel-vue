<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskAssignment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'task_assignments';
    protected $fillable = ['task_id', 'assigned_user_id', 'assigned_at', 'due_date'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relationship with user (assigned user)
    public function assignedUser()
    {
        return $this->belongsTo(User::class, 'assigned_user_id');
    }
}
