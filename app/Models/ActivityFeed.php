<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ActivityFeed extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'activity_feeds';
    protected $fillable = ['user_id', 'task_id', 'activity_type', 'activity_description'];

    // Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
