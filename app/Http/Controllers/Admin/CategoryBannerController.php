<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryBannerController extends Controller
{
    // 🧩 Trang danh sách trong admin
    public function index()
    {
        $categoryBanners = CategoryBanner::orderBy('position')->get();
        return view('admin.danh-muc.index', compact('categoryBanners'));
    }

    // 🧩 Trang tạo mới banner
    public function create()
    {
        return view('admin.danh-muc.create');
    }

    // 🧩 Lưu banner mới
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string|max:255',
        ], [
            'image.required' => 'Vui lòng chọn ảnh banner',
            'image.image' => 'File phải là ảnh',
            'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, webp',
            'image.max' => 'Kích thước ảnh tối đa 2MB',
        ]);

        // ✅ Tự động tìm vị trí trống tiếp theo (1-4)
        $existingPositions = CategoryBanner::pluck('position')->toArray();
        $availablePosition = null;

        for ($i = 1; $i <= 4; $i++) {
            if (!in_array($i, $existingPositions)) {
                $availablePosition = $i;
                break;
            }
        }

        // Nếu đã đủ 4 banner, không cho thêm nữa
        if ($availablePosition === null) {
            return redirect()->back()
                ->withErrors(['position' => 'Đã đủ 4 banner! Vui lòng xóa banner cũ trước khi thêm mới.'])
                ->withInput();
        }

        $imagePath = $request->file('image')->store('category-banners', 'public');

        CategoryBanner::create([
            'image' => $imagePath,
            'description' => $request->description,
            'position' => $availablePosition, // ✅ Tự động gán
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.category-banners.index')
            ->with('success', "✅ Thêm banner danh mục thành công! (Vị trí {$availablePosition})");
    }
    // 🧩 Trang chỉnh sửa
    public function edit(CategoryBanner $categoryBanner)
    {
        return view('admin.danh-muc.edit', compact('categoryBanner'));
    }

    // 🧩 Cập nhật banner
    public function update(Request $request, CategoryBanner $categoryBanner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'nullable|string|max:255',
            'position' => 'required|integer|min:1|max:4',
        ], [
            'image.image' => 'File phải là ảnh',
            'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, webp',
            'image.max' => 'Kích thước ảnh tối đa 2MB',
            'position.required' => 'Vui lòng chọn vị trí hiển thị',
        ]);

        $data = [
            'description' => $request->description,
            'position' => $request->position,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('image')) {
            if ($categoryBanner->image) {
                Storage::disk('public')->delete($categoryBanner->image);
            }
            $data['image'] = $request->file('image')->store('category-banners', 'public');
        }

        $categoryBanner->update($data);

        return redirect()->route('admin.category-banners.index')
            ->with('success', '✅ Cập nhật banner danh mục thành công!');
    }

    // 🧩 Xóa banner
    public function destroy(CategoryBanner $categoryBanner)
    {
        if ($categoryBanner->image) {
            Storage::disk('public')->delete($categoryBanner->image);
        }

        $categoryBanner->delete();

        return redirect()->route('admin.category-banners.index')
            ->with('success', '✅ Xóa banner danh mục thành công!');
    }

    // 🧩 Hiển thị banner ra giao diện (frontend)
    public function show()
    {
        // Chỉ lấy banner đang kích hoạt
        $categoryBanners = CategoryBanner::where('is_active', true)
            ->orderBy('position')
            ->get();

        // Trả về view frontend (ví dụ: resources/views/frontend/category-banner.blade.php)
        return view('frontend.category-banner', compact('categoryBanners'));
    }
}
