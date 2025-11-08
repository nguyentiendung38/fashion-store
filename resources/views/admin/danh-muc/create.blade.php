@extends('admin.dashboard')

@section('content')
<div class="container-fluid max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex items-center gap-3 mb-2">
            <a href="{{ route('admin.category-banners.index') }}"
                class="text-gray-600 hover:text-gray-800 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Thêm Banner Danh Mục</h1>
        </div>
        <p class="text-gray-600 ml-9">Tải lên ảnh banner mới cho trang chủ (Tối đa 4 banner)</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <form action="{{ route('admin.category-banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Image Upload -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Ảnh Banner <span class="text-red-500">*</span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-pink-500 transition-colors">
                    <input type="file"
                        name="image"
                        id="imageInput"
                        class="hidden"
                        accept="image/*"
                        onchange="previewImage(event)"
                        required>
                    <label for="imageInput" class="cursor-pointer">
                        <div id="uploadPlaceholder">
                            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="text-gray-600 font-medium mb-1">Click để tải ảnh lên</p>
                            <p class="text-gray-400 text-sm">hoặc kéo thả ảnh vào đây</p>
                        </div>
                        <div id="imagePreview" class="hidden">
                            <img id="preview" src="" alt="Preview" class="max-h-80 mx-auto rounded-lg shadow-md">
                            <p class="text-gray-600 mt-4">Click để thay đổi ảnh</p>
                        </div>
                    </label>
                </div>
                @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                @error('position')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p class="text-gray-500 text-sm mt-2">
                    <svg class="w-4 h-4 inline mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                    </svg>
                    Định dạng: JPG, PNG, WEBP. Kích thước đề xuất: 600x800px. Dung lượng tối đa: 2MB
                </p>
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Mô tả / Tên danh mục <span class="text-red-500">*</span>
                </label>
                <input type="text"
                    name="description"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent @error('description') border-red-500 @enderror"
                    placeholder="VD: Váy Công Sở, Áo Khoác, Phụ Kiện..."
                    value="{{ old('description') }}"
                    required>
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p class="text-gray-500 text-sm mt-1">Tên này sẽ hiển thị trên banner</p>
            </div>

            <!-- Active Status -->
            <div class="mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" class="w-5 h-5 text-pink-500 border-gray-300 rounded focus:ring-pink-500" checked>
                    <span class="ml-2 text-gray-700 font-semibold">Hiển thị banner ngay sau khi tải lên</span>
                </label>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 pt-4 border-t border-gray-200">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-pink-500 to-rose-500 text-black px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Lưu Banner
                </button>
                <a href="{{ route('admin.category-banners.index') }}"
                    class="flex-1 bg-gray-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-600 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Hủy
                </a>
            </div>
        </form>
    </div>

    <!-- Info Note -->
    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex">
            <svg class="w-5 h-5 text-blue-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <p class="text-sm text-blue-800 font-medium">Lưu ý</p>
                <p class="text-sm text-blue-700 mt-1">Hệ thống sẽ tự động gán vị trí cho banner. Tối đa 4 banner hiển thị trên trang chủ.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview').src = e.target.result;
                document.getElementById('uploadPlaceholder').classList.add('hidden');
                document.getElementById('imagePreview').classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection