<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'todos';

    protected $fillable = [
        'title',
        'description',
        'details',
        'status',
        'category_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function dates()
    {
        return $this->hasMany(Date::class);
    }
}
