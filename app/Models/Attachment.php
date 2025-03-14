<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'attachments';
    protected $fillable = ['task_id', 'file_name', 'file_path', 'uploaded_by'];

    // Relationship with task
    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    // Relationship with user (uploaded by)
    public function uploadedBy()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
