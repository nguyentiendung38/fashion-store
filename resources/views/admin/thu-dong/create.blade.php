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
            <h1 class="text-3xl font-bold text-gray-800">Thêm Lookbook Item</h1>
        </div>
        <p class="text-gray-600 ml-9">Tải lên video hoặc ảnh cho lookbook Thu Đông</p>
    </div>

    <!-- Form Card -->
    <div class="bg-white rounded-lg shadow-md p-8">
        <form action="{{ route('admin.lookbook.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Media Type Selection -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    Loại Media <span class="text-red-500">*</span>
                </label>
                <div class="flex gap-4">
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="media_type" value="video" class="w-5 h-5 text-pink-500" checked onchange="updateFileAccept()">
                        <span class="ml-2 text-gray-700">Video</span>
                    </label>
                    <label class="flex items-center cursor-pointer">
                        <input type="radio" name="media_type" value="image" class="w-5 h-5 text-pink-500" onchange="updateFileAccept()">
                        <span class="ml-2 text-gray-700">Ảnh</span>
                    </label>
                </div>
            </div>

            <!-- Media Upload -->
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">
                    File Media <span class="text-red-500">*</span>
                </label>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-pink-500 transition-colors">
                    <input type="file"
                        name="media"
                        id="mediaInput"
                        class="hidden"
                        accept="video/mp4,video/mov,video/avi"
                        onchange="previewMedia(event)"
                        required>
                    <label for="mediaInput" class="cursor-pointer">
                        <div id="uploadPlaceholder">
                            <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                            </svg>
                            <p class="text-gray-600 font-medium mb-1">Click để tải file lên</p>
                            <p class="text-gray-400 text-sm">hoặc kéo thả file vào đây</p>
                            <p class="text-gray-500 text-sm mt-2" id="fileTypeHint">Video: MP4, MOV, AVI (Max 50MB)</p>
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
                    placeholder="VD: Lookbook Thu Đông 2024, Elegant Office Look..."
                    value="{{ old('title') }}">
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
                    placeholder="VD: Xem video giới thiệu bộ sưu tập mới nhất..."
                    value="{{ old('description') }}">
                @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Active Status -->
            <div class="mb-6">
                <label class="flex items-center cursor-pointer">
                    <input type="checkbox" name="is_active" class="w-5 h-5 text-pink-500 border-gray-300 rounded focus:ring-pink-500" checked>
                    <span class="ml-2 text-gray-700 font-semibold">Hiển thị ngay sau khi tải lên</span>
                </label>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3 pt-4 border-t border-gray-200">
                <button type="submit"
                    class="flex-1 bg-gradient-to-r from-pink-500 to-rose-500 text-black px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Lưu Lookbook Item
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

    <!-- Info Note -->
    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex">
            <svg class="w-5 h-5 text-blue-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <p class="text-sm text-blue-800 font-medium">Lưu ý</p>
                <ul class="text-sm text-blue-700 mt-2 list-disc list-inside space-y-1">
                    <li>Tối đa 3 items: 1 video (vị trí 1) + 2 ảnh (vị trí 2-3)</li>
                    <li>Video: MP4, MOV, AVI - Tối đa 50MB</li>
                    <li>Ảnh: JPG, PNG, WEBP - Tối đa 50MB</li>
                    <li>Hệ thống tự động gán vị trí</li>
                </ul>
            </div>
        </div>
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