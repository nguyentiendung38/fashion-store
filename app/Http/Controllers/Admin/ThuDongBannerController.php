<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LookbookItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThuDongBannerController extends Controller
{
    // 🧩 Trang danh sách Lookbook
    public function index()
    {
        $lookbookItems = LookbookItem::orderBy('position')->get();
        return view('admin.thu-dong.index', compact('lookbookItems'));
    }

    // 🧩 Trang thêm mới
    public function create()
    {
        return view('admin.thu-dong.create');
    }
    public function show()
    {
        $video = LookbookItem::where('media_type', 'video')
            ->where('is_active', true)
            ->orderBy('position')
            ->first();

        $images = LookbookItem::where('media_type', 'image')
            ->where('is_active', true)
            ->orderBy('position')
            ->take(2)
            ->get();

        return view('lookbook.index', compact('video', 'images'));
    }
    // 🧩 Lưu item mới vào CSDL
    public function store(Request $request)
    {
        $request->validate([
            'media' => 'required|file|mimes:jpeg,png,jpg,webp,mp4|max:10240', // tối đa 10MB
            'media_type' => 'required|in:image,video',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
        ], [
            'media.required' => 'Vui lòng chọn file ảnh hoặc video.',
            'media.mimes' => 'Định dạng phải là: jpeg, png, jpg, webp, mp4.',
            'media.max' => 'Kích thước tối đa là 10MB.',
        ]);

        // ✅ Tự động tìm vị trí trống (1–3)
        $existingPositions = LookbookItem::pluck('position')->toArray();
        $availablePosition = null;

        for ($i = 1; $i <= 3; $i++) {
            if (!in_array($i, $existingPositions)) {
                $availablePosition = $i;
                break;
            }
        }

        if ($availablePosition === null) {
            return back()->with('error', 'Đã đủ 3 mục (1 video, 2 ảnh), không thể thêm nữa.');
        }

        // ✅ Lưu file
        $mediaPath = $request->file('media')->store('lookbook', 'public');

        // ✅ Lưu vào bảng lookbook_items
        LookbookItem::create([
            'media_path' => $mediaPath,
            'media_type' => $request->media_type,
            'position' => $availablePosition,
            'title' => $request->title,
            'description' => $request->description,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.lookbook.index')
            ->with('success', "✅ Thêm item thành công (Vị trí {$availablePosition})!");
    }

    // 🧩 Trang chỉnh sửa
    public function edit(LookbookItem $lookbookItem)
    {
        return view('admin.thu-dong.edit', compact('lookbookItem'));
    }

    // 🧩 Cập nhật item
    public function update(Request $request, LookbookItem $lookbookItem)
    {
        $request->validate([
            'media' => 'nullable|file|mimes:jpeg,png,jpg,webp,mp4|max:10240',
            'media_type' => 'required|in:image,video',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
            'position' => 'required|integer|min:1|max:3',
        ]);

        $data = [
            'media_type' => $request->media_type,
            'title' => $request->title,
            'description' => $request->description,
            'position' => $request->position,
            'is_active' => $request->has('is_active'),
        ];

        if ($request->hasFile('media')) {
            if ($lookbookItem->media_path) {
                Storage::disk('public')->delete($lookbookItem->media_path);
            }
            $data['media_path'] = $request->file('media')->store('lookbook', 'public');
        }

        $lookbookItem->update($data);

        return redirect()->route('admin.lookbook.index')
            ->with('success', '✅ Cập nhật item thành công!');
    }

    // 🧩 Xóa item
    public function destroy(LookbookItem $lookbookItem)
    {
        if ($lookbookItem->media_path) {
            Storage::disk('public')->delete($lookbookItem->media_path);
        }

        $lookbookItem->delete();

        return redirect()->route('admin.lookbook.index')
            ->with('success', '✅ Xóa item thành công!');
    }
}
