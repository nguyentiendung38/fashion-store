<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBanner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'description',
        'position',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}