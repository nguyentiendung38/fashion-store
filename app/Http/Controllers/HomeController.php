<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\HotTrend;
use App\Models\HeroImage; // ✅ Thêm dòng này
use App\Models\CategoryBanner; // ✅ THÊM dòng này

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Load dữ liệu như cũ
        $collections = Collection::latest()->get();
        $hotTrends = HotTrend::all();

        // ✅ Thêm dòng này để lấy hero images
        $heroImages = HeroImage::where('is_active', true)
            ->orderBy('position')
            ->get();
        // ✅ THÊM phần này để lấy category banners
        $categoryBanners = CategoryBanner::where('is_active', true)
            ->orderBy('position')
            ->get();

        // === PHẦN LOGIC QUAN TRỌNG ĐƯỢC BỔ SUNG ===

        // Xác định section cần cuộn tới dựa trên tên route
        $scrollToSection = null;
        $routeName = $request->route()->getName();

        // Ánh xạ tên route với ID của section tương ứng
        $sectionMap = [
            'about' => 'about',
            'collections.page' => 'collections',
            'jackets.page' => 'jackets',
            'hottrend.page' => 'hot-trend',
            'contact.page' => 'contact',
        ];

        if (isset($sectionMap[$routeName])) {
            $scrollToSection = $sectionMap[$routeName];
        }
        // ===============================================

        // ✅ Sửa lại phần return này, thêm heroImages vào
        return view('landing', [
            'collections' => $collections,
            'hotTrends' => $hotTrends,
            'heroImages' => $heroImages, // ✅ Thêm dòng này
            'categoryBanners' => $categoryBanners, // ✅ THÊM dòng này
            'scrollToSection' => $scrollToSection,
        ]);
    }
}
