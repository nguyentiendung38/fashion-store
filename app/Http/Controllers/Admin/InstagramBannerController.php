<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InstagramBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstagramBannerController extends Controller
{
    // Trang danh sách
    public function index()
    {
        $instagramBanners = InstagramBanner::orderBy('position')->get();
        return view('admin.instagram.index', compact('instagramBanners'));
    }

    // Trang tạo mới
    public function create()
    {
        // Kiểm tra đã đủ 6 ảnh chưa
        $existingCount = InstagramBanner::count();
        if ($existingCount >= 6) {
            return redirect()->route('admin.instagram.index')
                ->with('error', 'Đã đủ 6 ảnh Instagram. Vui lòng xóa ảnh cũ trước khi thêm mới.');
        }

        return view('admin.instagram.create');
    }

    // Lưu ảnh mới
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:5120', // 5MB
            'instagram_url' => 'nullable|url',
        ], [
            'image.required' => 'Vui lòng chọn ảnh',
            'image.image' => 'File phải là ảnh',
            'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, webp',
            'image.max' => 'Kích thước ảnh tối đa 5MB',
            'instagram_url.url' => 'Link Instagram không hợp lệ',
        ]);

        // Tự động tìm vị trí trống
        $existingPositions = InstagramBanner::pluck('position')->toArray();
        $availablePosition = null;

        for ($i = 1; $i <= 6; $i++) {
            if (!in_array($i, $existingPositions)) {
                $availablePosition = $i;
                break;
            }
        }

        if ($availablePosition === null) {
            return redirect()->back()
                ->withErrors(['position' => 'Đã đủ 6 ảnh! Vui lòng xóa ảnh cũ trước khi thêm mới.'])
                ->withInput();
        }

        // Lưu file
        $imagePath = $request->file('image')->store('instagram-banners', 'public');

        InstagramBanner::create([
            'image_path' => $imagePath,
            'position' => $availablePosition,
            'instagram_url' => $request->instagram_url,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.instagram.index')
            ->with('success', "✅ Thêm ảnh Instagram thành công! (Vị trí {$availablePosition})");
    }

    // Trang chỉnh sửa
    public function edit(InstagramBanner $instagramBanner)
    {
        return view('admin.instagram.edit', compact('instagramBanner'));
    }

    // Cập nhật ảnh
    public function update(Request $request, InstagramBanner $instagramBanner)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'position' => 'required|integer|min:1|max:6',
            'instagram_url' => 'nullable|url',
        ], [
            'image.image' => 'File phải là ảnh',
            'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, webp',
            'image.max' => 'Kích thước ảnh tối đa 5MB',
            'position.required' => 'Vui lòng chọn vị trí hiển thị',
            'instagram_url.url' => 'Link Instagram không hợp lệ',
        ]);

        $data = [
            'position' => $request->position,
            'instagram_url' => $request->instagram_url,
            'is_active' => $request->has('is_active'),
        ];

        // Nếu upload ảnh mới
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ
            if ($instagramBanner->image_path) {
                Storage::disk('public')->delete($instagramBanner->image_path);
            }
            $data['image_path'] = $request->file('image')->store('instagram-banners', 'public');
        }

        $instagramBanner->update($data);

        return redirect()->route('admin.instagram.index')
            ->with('success', '✅ Cập nhật ảnh Instagram thành công!');
    }

    // Xóa ảnh
    public function destroy(InstagramBanner $instagramBanner)
    {
        if ($instagramBanner->image_path) {
            Storage::disk('public')->delete($instagramBanner->image_path);
        }

        $instagramBanner->delete();

        return redirect()->route('admin.instagram.index')
            ->with('success', '✅ Xóa ảnh Instagram thành công!');
    }
}
