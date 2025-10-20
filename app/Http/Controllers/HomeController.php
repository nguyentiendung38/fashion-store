<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\HotTrend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; // 1. Thêm dòng này

class HomeController extends Controller
{
    // 2. Sửa lại phương thức index để nhận vào Request
    public function index(Request $request)
    {
        // Load dữ liệu như cũ
        $collections = Collection::latest()->get();
        $hotTrends = HotTrend::all();

        // === PHẦN LOGIC QUAN TRỌNG ĐƯỢC BỔ SUNG ===

        // 3. Xác định section cần cuộn tới dựa trên tên route
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

        // 4. Trả về view, truyền cả dữ liệu và biến scrollToSection
        return view('landing', [
            'collections' => $collections,
            'hotTrends' => $hotTrends,
            'scrollToSection' => $scrollToSection,
        ]);
    }
}
