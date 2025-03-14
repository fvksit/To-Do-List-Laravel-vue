<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaskLog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'task_logs';
    protected $fillable = ['task_id', 'status_from', 'status_to', 'changed_by', 'comment'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relationship with user (changed by)
    public function changedBy()
    {
        return $this->belongsTo(User::class, 'changed_by');
    }
}
