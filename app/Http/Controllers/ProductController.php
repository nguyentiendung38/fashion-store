<?php

namespace App\Http\Controllers;

use App\Models\HotTrend;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function show(HotTrend $hotTrend): View
    {
        return view('products.show', compact('hotTrend'));
    }
}
