<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstagramBanner extends Model
{
    protected $fillable = [
        'image_path',
        'position',
        'instagram_url',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
