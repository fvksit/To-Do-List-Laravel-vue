<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reminder extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'reminders';
    protected $fillable = ['task_id', 'reminder_time', 'reminder_type'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
