<?php
// app/Models/LookbookItem.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LookbookItem extends Model
{
    protected $fillable = [
        'media_path',
        'media_type',
        'position',
        'title',
        'description',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}