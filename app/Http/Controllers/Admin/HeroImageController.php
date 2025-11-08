<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroImageController extends Controller
{
    // Hiển thị danh sách ảnh
    public function index()
    {
        $heroImages = HeroImage::orderBy('position')->get();
        return view('admin.Banner.index', compact('heroImages'));
    }

    // Form tạo mới
    public function create()
    {
        return view('admin.Banner.create');
    }

    // Lưu ảnh mới
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'position' => 'required|integer|min:1|max:4',
            'alt_text' => 'nullable|string|max:255',
        ], [
            'image.required' => 'Vui lòng chọn ảnh banner',
            'image.image' => 'File phải là ảnh',
            'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, webp',
            'image.max' => 'Kích thước ảnh tối đa 2MB',
            'position.required' => 'Vui lòng chọn vị trí hiển thị',
            'position.min' => 'Vị trí phải từ 1 đến 4',
            'position.max' => 'Vị trí phải từ 1 đến 4',
        ]);

        $imagePath = $request->file('image')->store('hero-images', 'public');

        HeroImage::create([
            'image' => $imagePath,
            'position' => $request->position,
            'alt_text' => $request->alt_text,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.hero-images.index')
            ->with('success', '✅ Thêm banner hero thành công!');
    }

    // Form chỉnh sửa
    public function edit(HeroImage $heroImage)
    {
        return view('admin.Banner.edit', compact('heroImage'));
    }

    // Cập nhật ảnh
    public function update(Request $request, HeroImage $heroImage)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'position' => 'required|integer|min:1|max:4',
            'alt_text' => 'nullable|string|max:255',
        ], [
            'image.image' => 'File phải là ảnh',
            'image.mimes' => 'Ảnh phải có định dạng: jpeg, png, jpg, webp',
            'image.max' => 'Kích thước ảnh tối đa 2MB',
            'position.required' => 'Vui lòng chọn vị trí hiển thị',
            'position.min' => 'Vị trí phải từ 1 đến 4',
            'position.max' => 'Vị trí phải từ 1 đến 4',
        ]);

        $data = [
            'position' => $request->position,
            'alt_text' => $request->alt_text,
            'is_active' => $request->has('is_active'),
        ];

        // Nếu upload ảnh mới
        if ($request->hasFile('image')) {
            // Xóa ảnh cũ
            if ($heroImage->image) {
                Storage::disk('public')->delete($heroImage->image);
            }

            // Lưu ảnh mới
            $data['image'] = $request->file('image')->store('hero-images', 'public');
        }

        $heroImage->update($data);

        return redirect()->route('admin.hero-images.index')
            ->with('success', '✅ Cập nhật banner hero thành công!');
    }

    // Xóa ảnh
    public function destroy(HeroImage $heroImage)
    {
        // Xóa file ảnh
        if ($heroImage->image) {
            Storage::disk('public')->delete($heroImage->image);
        }

        // Xóa record trong database
        $heroImage->delete();

        return redirect()->route('admin.hero-images.index')
            ->with('success', '✅ Xóa banner hero thành công!');
    }
}
