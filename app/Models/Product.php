<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'image',
         'discount', // ✅ thêm dòng này
        'stock_quantity',
    ];
    
    /**
     * Lấy khóa của route cho model.
     * Giúp Laravel tự động tìm sản phẩm bằng 'slug' thay vì 'id'
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}