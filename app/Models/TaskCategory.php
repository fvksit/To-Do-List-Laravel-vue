<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskCategory extends Model
{
    use HasFactory;

    protected $table = 'task_categories';
    public $timestamps = true;

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relationship with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
