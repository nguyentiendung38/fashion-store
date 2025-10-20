<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotTrendController;
use App\Http\Controllers\ProductController;


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
// Các route này đều hiển thị trang chủ, nhưng có thể kèm theo yêu cầu cuộn chuột
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [HomeController::class, 'index'])->name('about');
Route::get('/vay-dam', [HomeController::class, 'index'])->name('collections.page');
Route::get('/ao-khoac', [HomeController::class, 'index'])->name('jackets.page');
Route::get('/hot-trend', [HomeController::class, 'index'])->name('hottrend.page');
Route::get('/lien-he', [HomeController::class, 'index'])->name('contact.page');

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
});

// ======================================================
// 🌐 PUBLIC ROUTES (Client)
// ======================================================

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{hotTrend}', [ProductController::class, 'show'])->name('products.show');
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');

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
