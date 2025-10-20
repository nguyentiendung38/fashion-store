<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Collection extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'price',
        'discount', // ✅ thêm dòng này
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($collection) {
            $slug = Str::slug($collection->name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $collection->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    public function images()
    {
        return $this->hasMany(CollectionImage::class);
    }

    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }
}
