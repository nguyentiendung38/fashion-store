<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class HotTrend extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price', // Add price to fillable
        'discount', // ✅ thêm vào

    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($hotTrend) {
            $slug = Str::slug($hotTrend->name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();

            $hotTrend->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
    public function images()
    {
        return $this->hasMany(HotTrendImage::class);
    }
}
