@extends('admin.dashboard') {{-- Giả sử layout admin của bạn là 'admin.dashboard' --}}

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <form action="{{ route('admin.collections.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="bg-white rounded-xl shadow-lg">
            <div class="px-6 py-4 border-b border-gray-200">
                <h4 class="text-xl font-semibold text-gray-800">Thêm Bộ Sưu Tập Mới</h4>
            </div>

            <div class="p-6">

                {{-- Hiển thị thông báo thành công --}}
                @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
                    <p>{{ session('success') }}</p>
                </div>
                @endif

                {{-- Hiển thị lỗi validation --}}
                @if($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6 rounded-md" role="alert">
                    <p class="font-bold mb-2">Đã có lỗi xảy ra:</p>
                    <ul class="list-disc pl-5 space-y-1">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <div class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Tên bộ sưu tập <span class="text-red-500">*</span></label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required
                            class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                    </div>

                    <div>
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Mô tả</label>
                        <textarea name="description" id="description" rows="4"
                            class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">{{ old('description') }}</textarea>
                    </div>

                    <div>
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Ảnh đại diện <span class="text-red-500">*</span></label>
                        <input type="file" name="image" id="image" required
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100 transition">
                    </div>

                    <div>
                        <label for="images" class="block text-sm font-medium text-gray-700 mb-2">Ảnh phụ (có thể chọn nhiều)</label>
                        <input type="file" name="images[]" id="images" multiple
                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-50 file:text-pink-700 hover:file:bg-pink-100 transition">
                    </div>

                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Giá <span class="text-red-500">*</span></label>
                        <div class="flex">
                            <input type="number" name="price" id="price" value="{{ old('price') }}" required min="0"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-l-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                            <span class="inline-flex items-center px-3 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-r-md">
                                VNĐ
                            </span>
                        </div>
                    </div>
                    <div>
                        <label for="discount" class="block text-sm font-medium text-gray-700 mb-2">
                            Giảm giá (%)
                            <span class="text-gray-400 text-xs">(tùy chọn)</span>
                        </label>
                        <div class="flex">
                            <input type="number" name="discount" id="discount" value="{{ old('discount', 0) }}" min="0" max="100"
                                class="block w-full px-3 py-2 bg-white border border-gray-300 rounded-l-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-pink-500 focus:border-pink-500 sm:text-sm">
                            <span class="inline-flex items-center px-3 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-r-md">
                                %
                            </span>
                        </div>
                        <p class="text-gray-500 text-xs mt-1">Nhập 0 nếu không giảm giá</p>
                    </div>

                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 border-t border-gray-200 flex items-center justify-end space-x-4 rounded-b-xl">
                <a href="{{ route('admin.collections.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg transition duration-300">
                    Hủy bỏ
                </a>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
                    Tạo mới
                </button>
            </div>
        </div>
    </form>
</div>
@endsection