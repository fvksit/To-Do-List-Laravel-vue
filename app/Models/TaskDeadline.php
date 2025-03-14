<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskDeadline extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'task_deadlines';
    protected $fillable = ['task_id', 'deadline_time', 'reminder_sent'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
