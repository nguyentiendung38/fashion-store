<?php

namespace App\Http\Controllers;

use App\Models\HotTrendImage; // Model ảnh phụ
use App\Models\HotTrend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HotTrendController extends Controller
{
    public function index()
    {
        $hotTrends = HotTrend::all();
        return view('admin.hot-trends.index', compact('hotTrends'));
    }

    public function create()
    {
        return view('admin.hot-trends.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100', // ✅ validate giảm giá
            'image' => 'required|image',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $hotTrend = HotTrend::create([
                'name' => $request->name,
                'price' => $request->price,
                'discount' => $request->discount ?? 0, // ✅ lưu giảm giá
                'description' => $request->description,
                'image' => $request->file('image')->store('hot-trends', 'public'),
            ]);

            if ($request->hasFile('gallery')) {
                foreach ($request->file('gallery') as $image) {
                    $hotTrend->images()->create([
                        'image' => $image->store('product-gallery', 'public')
                    ]);
                }
            }

            return redirect()->route('admin.hot-trends.index')
                ->with('success', 'Hot trend đã được thêm thành công.');
        }

        return back()->with('error', 'Không thể tải lên hình ảnh.');
    }

    public function edit(HotTrend $hotTrend)
    {
        return view('admin.hot-trends.edit', compact('hotTrend'));
    }

    public function update(Request $request, HotTrend $hotTrend)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100', // ✅ validate giảm giá
            'image' => 'nullable|image',
        ]);

        $data = $request->only(['name', 'description', 'price', 'discount']); // ✅ thêm discount

        if ($request->hasFile('image')) {
            if ($hotTrend->image && Storage::disk('public')->exists($hotTrend->image)) {
                Storage::disk('public')->delete($hotTrend->image);
            }
            $data['image'] = $request->file('image')->store('hot-trends', 'public');
        }

        $hotTrend->update($data);

        return redirect()->route('admin.hot-trends.index')
            ->with('success', 'Hot trend đã được cập nhật thành công.');
    }


    public function destroy(HotTrend $hotTrend)
    {
        $hotTrend->delete();
        return redirect()->route('admin.hot-trends.index')
            ->with('success', 'Hot trend đã được xóa thành công.');
    }
    public function uploadImage(Request $request, HotTrend $hotTrend)
    {
        $request->validate([
            'images.*' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $hotTrend->images()->create([
                    'image' => $file->store('hot-trends/gallery', 'public')
                ]);
            }
        }

        return redirect()->back()->with('success', 'Tải lên ảnh phụ thành công!');
    }
    public function deleteImage(HotTrendImage $image)
    {
        if (Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }

        $image->delete();

        return redirect()->back()->with('success', 'Xóa ảnh phụ thành công!');
    }
}
