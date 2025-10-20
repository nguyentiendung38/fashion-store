<?php

namespace App\Http\Controllers; // Hoặc App\Http\Controllers\Admin

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\CollectionImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::latest()->get();
        return view('admin.collections.index', compact('collections'));
    }

    public function create()
    {
        return view('admin.collections.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100', // ✅ Thêm validate giảm giá
            'image' => 'required|image|max:2048',
            'images.*' => 'nullable|image|max:2048',
        ]);

        DB::beginTransaction();
        try {
            // Lưu ảnh chính
            $imagePath = $request->file('image')->store('collections', 'public');

            // Tạo bộ sưu tập
            $collection = Collection::create([
                'name' => $validated['name'],
                'description' => $validated['description'] ?? null,
                'slug' => Str::slug($validated['name']),
                'price' => $validated['price'],
                'discount' => $validated['discount'] ?? 0, // ✅ Thêm discount vào dữ liệu lưu
                'image' => $imagePath,
            ]);

            // Lưu ảnh phụ nếu có
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    $path = $file->store('collections', 'public');
                    $collection->images()->create(['image' => $path]);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Đã có lỗi xảy ra: ' . $e->getMessage())->withInput();
        }

        return redirect()->route('admin.collections.index')->with('success', 'Thêm bộ sưu tập thành công');
    }


    public function show(Collection $collection)
    {
        return view('collections.show', compact('collection'));
    }

    public function edit(Collection $collection)
    {
        $collection->load('images');
        return view('admin.collections.edit', compact('collection'));
    }

    public function update(Request $request, Collection $collection)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'price'       => 'required|numeric|min:0',
            'discount'    => 'nullable|numeric|min:0|max:100', // ✅ validate giảm giá
            'description' => 'nullable|string',
            'image'       => 'nullable|image|max:2048',
            'new_images.*'  => 'nullable|image|max:2048',
        ]);

        DB::beginTransaction();
        try {
            // ✅ Cập nhật thông tin cơ bản
            $collection->update([
                'name'        => $validated['name'],
                'slug'        => Str::slug($validated['name']),
                'price'       => $validated['price'],
                'discount'    => $validated['discount'] ?? 0, // ✅ lưu giảm giá
                'description' => $validated['description'] ?? null,
            ]);

            // ✅ Cập nhật ảnh đại diện (nếu có upload mới)
            if ($request->hasFile('image')) {
                if ($collection->image && Storage::disk('public')->exists($collection->image)) {
                    Storage::disk('public')->delete($collection->image);
                }
                $path = $request->file('image')->store('collections', 'public');
                $collection->image = $path;
                $collection->save();
            }

            // ✅ Thêm ảnh phụ mới (nếu có)
            if ($request->hasFile('new_images')) {
                foreach ($request->file('new_images') as $file) {
                    $path = $file->store('collections', 'public');
                    $collection->images()->create(['image' => $path]);
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Đã có lỗi xảy ra: ' . $e->getMessage())->withInput();
        }

        return back()->with('success', 'Cập nhật bộ sưu tập thành công!');
    }


    public function destroy(Collection $collection)
    {
        DB::transaction(function () use ($collection) {
            foreach ($collection->images as $img) {
                if (Storage::disk('public')->exists($img->image)) {
                    Storage::disk('public')->delete($img->image);
                }
                $img->delete();
            }

            if (Storage::disk('public')->exists($collection->image)) {
                Storage::disk('public')->delete($collection->image);
            }

            $collection->delete();
        });

        return redirect()->route('admin.collections.index')->with('success', 'Xóa bộ sưu tập thành công');
    }

    public function deleteImage(CollectionImage $image)
    {
        if (Storage::disk('public')->exists($image->image)) {
            Storage::disk('public')->delete($image->image);
        }
        $image->delete();

        // Redirect về trang edit với flash message
        return back()->with('success', 'Xóa ảnh phụ thành công.');
    }

    public function uploadImage(Request $request, Collection $collection)
    {
        $request->validate([
            'images.*' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('collections', 'public');
                $collection->images()->create(['image' => $path]);
            }
        }

        return redirect()->back()->with('success', 'Tải lên ảnh phụ thành công!');
    }
}
