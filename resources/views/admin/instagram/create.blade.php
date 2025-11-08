@extends('admin.dashboard')

@section('content')
<div class="container-fluid max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex items-center gap-3 mb-2">
            <a href="{{ route('admin.instagram.index') }}"
                class="text-gray-600 hover:text-gray-800 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Thêm Ảnh Instagram</h1>
        </div>
        <p class="text-gray-600 ml-9">Tải lên ảnh mới cho Instagram section (Tối đa 6 ảnh)</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <form action="{{ route('admin.instagram.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Image Upload -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Ảnh <span class="text-red-500">*</span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-purple-500 transition-colors">
                    <input type="file"
                        name="image"
                        id="imageInput"
                        class="hidden"
                        accept="image/*"
                        onchange="previewImage(event)"
                        required>
                    <label for="imageInput" class="cursor-pointer">
                        <div id="uploadPlaceholder">
                            <i class="fab fa-instagram text-gray-400 text-6xl mb-4"></i>
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
                    Định dạng: JPG, PNG, WEBP. Kích thước đề xuất: 800x800px (ảnh vuông). Dung lượng tối đa: 5MB
                </p>
            </div>

            <!-- Instagram URL -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Link Instagram <span class="text-gray-500 text-sm">(Tùy chọn)</span>
                </label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fab fa-instagram text-purple-500"></i>
                    </div>
                    <input type="url"
                        name="instagram_url"
                        class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent @error('instagram_url') border-red-500 @enderror"
                        placeholder="https://www.instagram.com/p/..."
                        value="{{ old('instagram_url') }}">
                </div>
                @error('instagram_url')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p class="text-gray-500 text-sm mt-1">Người dùng sẽ được chuyển đến link này khi click vào ảnh</p>
            </div>

            <!-- Active Status -->
            <div class="mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" class="w-5 h-5 text-purple-500 border-gray-300 rounded focus:ring-purple-500" checked>
                    <span class="ml-2 text-gray-700 font-semibold">Hiển thị ảnh ngay sau khi tải lên</span>
                </label>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 pt-4 border-t border-gray-200">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-purple-500 to-pink-500 text-black px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Lưu Ảnh
                </button>
                <a href="{{ route('admin.instagram.index') }}"
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
    <div class="mt-6 bg-gradient-to-r from-purple-50 to-pink-50 border border-purple-200 rounded-lg p-4">
        <div class="flex">
            <i class="fab fa-instagram text-purple-500 text-xl mr-3 mt-1"></i>
            <div>
                <p class="text-sm text-purple-800 font-medium">Lưu ý</p>
                <p class="text-sm text-purple-700 mt-1">Hệ thống sẽ tự động gán vị trí cho ảnh. Tối đa 6 ảnh hiển thị trên trang chủ.</p>
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