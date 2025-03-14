<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subtask extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'subtasks';
    protected $fillable = ['task_id', 'title', 'status', 'due_date'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
