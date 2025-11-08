<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotTrendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\HeroImageController;
use App\Http\Controllers\Admin\CategoryBannerController;
use App\Http\Controllers\Admin\ThuDongBannerController;
use App\Http\Controllers\Admin\InstagramBannerController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là nơi định nghĩa toàn bộ route cho website.
| Được chia thành 2 phần: Admin và Public.
|
*/

// ======================================================
// 🔐 ADMIN ROUTES
// ======================================================

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    // login / logout
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // dashboard
    Route::get('/', function () {
        if (!session('is_admin')) return redirect()->route('admin.login');
        return view('admin.dashboard');
    })->name('dashboard');

    // collections
    Route::group(['prefix' => 'collections', 'as' => 'collections.'], function () {
        Route::get('/', [CollectionController::class, 'index'])->name('index');
        Route::get('/create', [CollectionController::class, 'create'])->name('create');
        Route::post('/', [CollectionController::class, 'store'])->name('store');
        Route::get('/{collection}/edit', [CollectionController::class, 'edit'])->name('edit');
        Route::put('/{collection}', [CollectionController::class, 'update'])->name('update');
        Route::delete('/images/{image}', [CollectionController::class, 'deleteImage'])->name('deleteImage');
        Route::delete('/{collection}', [CollectionController::class, 'destroy'])->name('destroy');
        // upload ảnh phụ cho collection
        Route::post('/{collection}/images', [CollectionController::class, 'uploadImage'])->name('uploadImage');
    });

    // hot-trends
    Route::group(['prefix' => 'hot-trends', 'as' => 'hot-trends.'], function () {
        Route::get('/', [HotTrendController::class, 'index'])->name('index');
        Route::get('/create', [HotTrendController::class, 'create'])->name('create');
        Route::post('/', [HotTrendController::class, 'store'])->name('store');
        Route::get('/{hotTrend}/edit', [HotTrendController::class, 'edit'])->name('edit');
        Route::put('/{hotTrend}', [HotTrendController::class, 'update'])->name('update');
        Route::delete('/{hotTrend}', [HotTrendController::class, 'destroy'])->name('destroy');

        // upload ảnh phụ
        Route::post('/{hotTrend}/images', [HotTrendController::class, 'uploadImage'])->name('uploadImage');

        // ✅ route xóa ảnh phụ
        Route::delete('/images/{image}', [HotTrendController::class, 'deleteImage'])->name('deleteImage');
    });

    // ✅ HERO IMAGES (Banner) ROUTES
    Route::group(['prefix' => 'hero-images', 'as' => 'hero-images.'], function () {
        Route::get('/', [HeroImageController::class, 'index'])->name('index');
        Route::get('/create', [HeroImageController::class, 'create'])->name('create');
        Route::post('/', [HeroImageController::class, 'store'])->name('store');
        Route::get('/{heroImage}/edit', [HeroImageController::class, 'edit'])->name('edit');
        Route::put('/{heroImage}', [HeroImageController::class, 'update'])->name('update');
        Route::delete('/{heroImage}', [HeroImageController::class, 'destroy'])->name('destroy');
    });


    // ✅ CATEGORY BANNERS ROUTES
    Route::group(['prefix' => 'category-banners', 'as' => 'category-banners.'], function () {
        Route::get('/', [CategoryBannerController::class, 'index'])->name('index');
        Route::get('/create', [CategoryBannerController::class, 'create'])->name('create');
        Route::post('/', [CategoryBannerController::class, 'store'])->name('store');
        Route::get('/{categoryBanner}/edit', [CategoryBannerController::class, 'edit'])->name('edit');
        Route::put('/{categoryBanner}', [CategoryBannerController::class, 'update'])->name('update');
        Route::delete('/{categoryBanner}', [CategoryBannerController::class, 'destroy'])->name('destroy');
    });

    // Lookbook Routes
    Route::get('/lookbook', [ThuDongBannerController::class, 'index'])->name('lookbook.index');
    Route::get('/lookbook/create', [ThuDongBannerController::class, 'create'])->name('lookbook.create');
    Route::post('/lookbook', [ThuDongBannerController::class, 'store'])->name('lookbook.store');
    Route::get('/lookbook/{lookbookItem}/edit', [ThuDongBannerController::class, 'edit'])->name('lookbook.edit');
    Route::put('/lookbook/{lookbookItem}', [ThuDongBannerController::class, 'update'])->name('lookbook.update');
    Route::delete('/lookbook/{lookbookItem}', [ThuDongBannerController::class, 'destroy'])->name('lookbook.destroy');
});


// Admin Instagram Banner Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/instagram', [InstagramBannerController::class, 'index'])->name('instagram.index');
    Route::get('/instagram/create', [InstagramBannerController::class, 'create'])->name('instagram.create');
    Route::post('/instagram', [InstagramBannerController::class, 'store'])->name('instagram.store');
    Route::get('/instagram/{instagramBanner}/edit', [InstagramBannerController::class, 'edit'])->name('instagram.edit');
    Route::put('/instagram/{instagramBanner}', [InstagramBannerController::class, 'update'])->name('instagram.update');
    Route::delete('/instagram/{instagramBanner}', [InstagramBannerController::class, 'destroy'])->name('instagram.destroy');
});
// DANH MỤC ADMIN ROUTES?/


// ======================================================
// 🌐 PUBLIC ROUTES (Client)
// ======================================================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{hotTrend}', [ProductController::class, 'show'])->name('products.show');
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');

// Các route trang chủ với anchor
Route::get('/gioi-thieu', [HomeController::class, 'index'])->name('about');
Route::get('/vay-dam', [HomeController::class, 'index'])->name('collections.page');
Route::get('/ao-khoac', [HomeController::class, 'index'])->name('jackets.page');
Route::get('/hot-trend', [HomeController::class, 'index'])->name('hottrend.page');
Route::get('/lien-he', [HomeController::class, 'index'])->name('contact.page');

// =====================MỤC TRANG============================

Route::view('/chinh-sach-bao-mat', 'chinh-sach.chinh-sach-bao-mat')
    ->name('policy.privacy');

Route::view('/dieu-khoan-su_dung', 'chinh-sach.dieu-khoan-su-dung')
    ->name('policy.terms');

Route::view('/chinh-sach-doi-tra', 'chinh-sach.chinh-sach-doi-tra')
    ->name('policy.returns');

Route::view('/van-chuyen-giao-hang', 'chinh-sach.van-chuyen-giao-hang')
    ->name('policy.shipping');

Route::view('/huong-dan-chon-size', 'chinh-sach.huong-dan-chon-size')
    ->name('policy.size_guide');
