<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'title', 'description', 'priority', 'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 'todo')
                     ->orWhere('status', 'doing');
    }
}
