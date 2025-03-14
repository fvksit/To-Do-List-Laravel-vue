<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'comments';
    protected $fillable = ['task_id', 'user_id', 'comment_text'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
