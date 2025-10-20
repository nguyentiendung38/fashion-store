<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HotTrendImage extends Model
{
    protected $fillable = ['hot_trend_id', 'image'];

    public function hotTrend()
    {
        return $this->belongsTo(HotTrend::class);
    }
}
