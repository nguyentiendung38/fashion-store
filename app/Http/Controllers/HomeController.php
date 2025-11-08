<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\HotTrend;
use App\Models\HeroImage;
use App\Models\CategoryBanner;
use App\Models\LookbookItem;
use App\Models\InstagramBanner; // ✅ THÊM dòng này
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Load dữ liệu như cũ
        $collections = Collection::latest()->get();
        $hotTrends = HotTrend::all();

        // Hero images
        $heroImages = HeroImage::where('is_active', true)
            ->orderBy('position')
            ->get();

        // Category banners
        $categoryBanners = CategoryBanner::where('is_active', true)
            ->orderBy('position')
            ->get();

        // Lookbook video
        $lookbookVideo = LookbookItem::where('media_type', 'video')
            ->where('is_active', true)
            ->orderBy('position')
            ->first();

        // Lookbook images
        $lookbookImages = LookbookItem::where('media_type', 'image')
            ->where('is_active', true)
            ->orderBy('position')
            ->take(2)
            ->get();

        // ✅ THÊM Instagram banners
        $instagramBanners = InstagramBanner::where('is_active', true)
            ->orderBy('position')
            ->limit(6)
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

        // Return view với tất cả dữ liệu
        return view('landing', [
            'collections' => $collections,
            'hotTrends' => $hotTrends,
            'heroImages' => $heroImages,
            'categoryBanners' => $categoryBanners,
            'lookbookVideo' => $lookbookVideo,
            'lookbookImages' => $lookbookImages,
            'instagramBanners' => $instagramBanners, // ✅ THÊM dòng này
            'scrollToSection' => $scrollToSection,
        ]);
    }
}
