<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'title',
        'is_completed',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
    ];
}