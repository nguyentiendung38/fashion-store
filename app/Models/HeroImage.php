<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'position',
        'alt_text',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}