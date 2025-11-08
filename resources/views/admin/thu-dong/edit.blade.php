@extends('admin.dashboard')

@section('content')
<div class="container-fluid max-w-4xl mx-auto">
    <!-- Header -->
    <div class="mb-6">
        <div class="flex items-center gap-3 mb-2">
            <a href="{{ route('admin.lookbook.index') }}"
                class="text-gray-600 hover:text-gray-800 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                </svg>
            </a>
            <h1 class="text-3xl font-bold text-gray-800">Chỉnh Sửa Lookbook Item</h1>
        </div>
        <p class="text-gray-600 ml-9">Cập nhật thông tin video/ảnh lookbook</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <form action="{{ route('admin.lookbook.update', $lookbookItem) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Position Selection -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Vị trí hiển thị <span class="text-red-500">*</span>
                </label>
                <select name="position"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                    required>
                    <option value="">-- Chọn vị trí --</option>
                    <option value="1" {{ old('position', $lookbookItem->position) == 1 ? 'selected' : '' }}>Vị trí 1 (Video chính - Trái)</option>
                    <option value="2" {{ old('position', $lookbookItem->position) == 2 ? 'selected' : '' }}>Vị trí 2 (Ảnh 1 - Trên phải)</option>
                    <option value="3" {{ old('position', $lookbookItem->position) == 3 ? 'selected' : '' }}>Vị trí 3 (Ảnh 2 - Dưới phải)</option>
                </select>
                @error('position')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Media Type Selection -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Loại Media <span class="text-red-500">*</span>
                </label>
                <div class="flex gap-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="media_type" value="video"
                            class="w-5 h-5 text-pink-500"
                            {{ old('media_type', $lookbookItem->media_type) == 'video' ? 'checked' : '' }}
                            onchange="updateFileAccept()">
                        <span class="ml-2 text-gray-700">Video</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="media_type" value="image"
                            class="w-5 h-5 text-pink-500"
                            {{ old('media_type', $lookbookItem->media_type) == 'image' ? 'checked' : '' }}
                            onchange="updateFileAccept()">
                        <span class="ml-2 text-gray-700">Ảnh</span>
                    </label>
                </div>
            </div>

            <!-- Current Media Preview -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Media Hiện Tại
                </label>
                <div class="border border-gray-300 rounded-lg p-4 bg-gray-50">
                    @if($lookbookItem->media_type == 'video')
                    <video class="max-h-80 mx-auto rounded-lg shadow-md" controls>
                        <source src="{{ Storage::url($lookbookItem->media_path) }}" type="video/mp4">
                    </video>
                    @else
                    <img src="{{ Storage::url($lookbookItem->media_path) }}"
                        alt="{{ $lookbookItem->title }}"
                        class="max-h-80 mx-auto rounded-lg shadow-md">
                    @endif
                </div>
            </div>

            <!-- Media Upload -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Thay Đổi File Media <span class="text-gray-500 text-sm">(Tùy chọn)</span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-pink-500 transition-colors">
                    <input type="file"
                        name="media"
                        id="mediaInput"
                        class="hidden"
                        accept="{{ $lookbookItem->media_type == 'video' ? 'video/mp4,video/mov,video/avi' : 'image/jpeg,image/png,image/jpg,image/webp' }}"
                        onchange="previewMedia(event)">
                    <label for="mediaInput" class="cursor-pointer">
                        <div id="uploadPlaceholder">
                            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="text-gray-600 font-medium mb-1">Click để tải file mới lên</p>
                            <p class="text-gray-400 text-sm">hoặc kéo thả file vào đây</p>
                            <p class="text-gray-500 text-sm mt-2" id="fileTypeHint">
                                {{ $lookbookItem->media_type == 'video' ? 'Video: MP4, MOV, AVI (Max 50MB)' : 'Ảnh: JPG, PNG, WEBP (Max 50MB)' }}
                            </p>
                        </div>
                        <div id="mediaPreview" class="hidden">
                            <video id="videoPreview" class="hidden max-h-80 mx-auto rounded-lg shadow-md" controls>
                                <source src="" type="video/mp4">
                            </video>
                            <img id="imagePreview" class="hidden max-h-80 mx-auto rounded-lg shadow-md" src="" alt="Preview">
                            <p class="text-gray-600 mt-4">Click để thay đổi file</p>
                        </div>
                    </label>
                </div>
                @error('media')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Title -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Tiêu đề <span class="text-gray-500 text-sm">(Tùy chọn)</span>
                </label>
                <input type="text"
                    name="title"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                    placeholder="VD: Lookbook Thu Đông 2024..."
                    value="{{ old('title', $lookbookItem->title) }}">
                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Description -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Mô tả <span class="text-gray-500 text-sm">(Tùy chọn)</span>
                </label>
                <input type="text"
                    name="description"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-500 focus:border-transparent"
                    placeholder="VD: Xem video giới thiệu bộ sưu tập..."
                    value="{{ old('description', $lookbookItem->description) }}">
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Active Status -->
            <div class="mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox"
                        name="is_active"
                        class="w-5 h-5 text-pink-500 border-gray-300 rounded focus:ring-pink-500"
                        {{ old('is_active', $lookbookItem->is_active) ? 'checked' : '' }}>
                    <span class="ml-2 text-gray-700 font-semibold">Hiển thị item</span>
                </label>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 pt-4 border-t border-gray-200">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-pink-500 to-rose-500 text-black px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Cập Nhật
                </button>
                <a href="{{ route('admin.lookbook.index') }}"
                    class="flex-1 bg-gray-500 text-white px-6 py-3 rounded-lg font-semibold hover:bg-gray-600 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                    Hủy
                </a>
            </div>
        </form>
    </div>
</div>

<script>
    function updateFileAccept() {
        const mediaInput = document.getElementById('mediaInput');
        const videoRadio = document.querySelector('input[name="media_type"][value="video"]');
        const fileTypeHint = document.getElementById('fileTypeHint');

        if (videoRadio.checked) {
            mediaInput.accept = 'video/mp4,video/mov,video/avi';
            fileTypeHint.textContent = 'Video: MP4, MOV, AVI (Max 50MB)';
        } else {
            mediaInput.accept = 'image/jpeg,image/png,image/jpg,image/webp';
            fileTypeHint.textContent = 'Ảnh: JPG, PNG, WEBP (Max 50MB)';
        }
    }

    function previewMedia(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            const isVideo = file.type.startsWith('video/');

            reader.onload = function(e) {
                document.getElementById('uploadPlaceholder').classList.add('hidden');
                document.getElementById('mediaPreview').classList.remove('hidden');

                if (isVideo) {
                    document.getElementById('videoPreview').classList.remove('hidden');
                    document.getElementById('imagePreview').classList.add('hidden');
                    document.getElementById('videoPreview').querySelector('source').src = e.target.result;
                    document.getElementById('videoPreview').load();
                } else {
                    document.getElementById('imagePreview').classList.remove('hidden');
                    document.getElementById('videoPreview').classList.add('hidden');
                    document.getElementById('imagePreview').src = e.target.result;
                }
            }
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection