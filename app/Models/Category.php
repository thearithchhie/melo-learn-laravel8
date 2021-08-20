<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'image',
        'status',
    ];

    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'status' => 'int'
    ];

    use HasFactory;
}
