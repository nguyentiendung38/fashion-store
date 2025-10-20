@extends('admin.dashboard')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

    {{-- Hiển thị flash message --}}
    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md">
            {{ session('error') }}
        </div>
    @endif

    {{-- Hiển thị lỗi validate --}}
    @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md">
            <p class="font-bold mb-2">Đã có lỗi xảy ra:</p>
            <ul class="list-disc pl-5 space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- ========================= FORM CẬP NHẬT THÔNG TIN ========================= --}}
    <form action="{{ route('admin.hot-trends.update', $hotTrend) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-xl shadow-lg mb-6">
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
                <h4 class="text-xl font-semibold text-gray-800">Sửa Hot Trend</h4>
                <a href="{{ route('admin.hot-trends.index') }}"
                    class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg transition duration-300">
                    Quay lại
                </a>
            </div>

            <div class="p-6 space-y-6">
                {{-- Tên --}}
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                        Tên <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="name" id="name" value="{{ old('name', $hotTrend->name) }}" required
                        class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                </div>

                {{-- Mô tả --}}
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Mô tả</label>
                    <textarea name="description" id="description" rows="4"
                        class="block w-full px-3 py-2 border border-gray-300 rounded-md focus:ring-pink-500 focus:border-pink-500 sm:text-sm">{{ old('description', $hotTrend->description) }}</textarea>
                </div>

                {{-- Giá --}}
                <div>
                    <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Giá <span class="text-red-500">*</span></label>
                    <div class="flex">
                        <input type="number" name="price" id="price" value="{{ old('price', $hotTrend->price) }}" required min="0"
                            class="block w-full px-3 py-2 border border-gray-300 rounded-l-md focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                        <span class="inline-flex items-center px-3 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-r-md">
                            VNĐ
                        </span>
                    </div>
                </div>
{{-- Giảm giá (%) --}}
<div>
    <label for="discount" class="block text-sm font-medium text-gray-700 mb-2">
        Giảm giá (%)
    </label>
    <div class="flex">
        <input type="number" name="discount" id="discount"
            value="{{ old('discount', $hotTrend->discount ?? 0) }}"
            min="0" max="100"
            class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-l-md shadow-sm focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
        <span
            class="inline-flex items-center px-3 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-r-md">
            %
        </span>
    </div>
</div>

                {{-- Ảnh đại diện --}}
                <div class="border-t border-gray-200 pt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ảnh đại diện hiện tại</label>
                        <img src="{{ Storage::url($hotTrend->image) }}" alt="Ảnh đại diện" class="w-48 h-auto rounded-lg shadow-md">
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Thay đổi ảnh đại diện</label>
                        <input type="file" name="image" id="image"
                            class="block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100">
                        <p class="mt-1 text-sm text-gray-500">Để trống nếu không muốn thay đổi.</p>
                    </div>
                </div>

            </div>

            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition">
                    Cập nhật
                </button>
            </div>
        </div>
    </form>

    {{-- ========================= ẢNH PHỤ HIỆN CÓ ========================= --}}
    <div class="bg-white rounded-xl shadow-lg mb-6 p-6">
        <label class="block text-sm font-medium text-gray-700 mb-2">Các ảnh phụ hiện có</label>

        @if($hotTrend->images && $hotTrend->images->isNotEmpty())
            <div class="flex flex-wrap gap-4">
                @foreach($hotTrend->images as $img)
                    <div class="relative group">
                        <img src="{{ Storage::url($img->image) }}" alt="Image" class="w-24 h-24 object-cover rounded-md">

                        {{-- Form xóa ảnh phụ --}}
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition">
                            <form action="{{ route('admin.hot-trends.deleteImage', $img->id) }}" method="POST"
                                onsubmit="return confirm('Bạn chắc chắn muốn xóa ảnh này?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-white text-2xl font-bold">&times;</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-sm text-gray-500">Chưa có ảnh phụ nào.</p>
        @endif
    </div>

    {{-- ========================= FORM UPLOAD ẢNH PHỤ MỚI ========================= --}}
    <form action="{{ route('admin.hot-trends.uploadImage', $hotTrend->id) }}"
        method="POST"
        enctype="multipart/form-data"
        class="bg-white rounded-xl shadow-lg p-6">
        @csrf

        <label for="images" class="block text-sm font-medium text-gray-700 mb-2">📸 Thêm ảnh phụ mới</label>
        <input type="file" name="images[]" id="images" multiple
            class="block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-full file:border-0 file:bg-green-50 file:text-green-700 hover:file:bg-green-100 transition">

        <button type="submit"
            class="mt-3 bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-lg transition">
            Tải lên ảnh
        </button>
    </form>

</div>
@endsection