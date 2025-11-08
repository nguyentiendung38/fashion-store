@extends('admin.dashboard')

@section('content')
<div class="container-fluid">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <div>
            <h1 class="text-3xl font-bold text-gray-800">Quản Lý Lookbook Thu Đông</h1>
            <p class="text-gray-600 mt-1">Quản lý video và ảnh lookbook hiển thị trên trang chủ</p>
        </div>
        @if($lookbookItems->count() < 3)
        <a href="{{ route('admin.lookbook.create') }}"
            class="bg-gradient-to-r from-blue-500 to-blue-600 text-black px-6 py-3 rounded-lg font-semibold hover:shadow-lg transition-all flex items-center gap-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Thêm Item Mới
        </a>
        @endif
    </div>

    <!-- Success Message -->
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg mb-6 relative" role="alert">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <span>{{ session('success') }}</span>
        </div>
        <button onclick="this.parentElement.remove()" class="absolute top-0 right-0 mt-4 mr-4">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
    </div>
    @endif

    @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg mb-6">
        {{ session('error') }}
    </div>
    @endif

    <!-- Table Card -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b border-gray-200">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Vị Trí</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Loại</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Preview</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Tiêu Đề</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Mô Tả</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Trạng Thái</th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-gray-700 uppercase">Thao Tác</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($lookbookItems as $item)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-gradient-to-r from-pink-500 to-rose-500 text-white">
                                Vị trí {{ $item->position }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            @if($item->media_type == 'video')
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path>
                                </svg>
                                Video
                            </span>
                            @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                                </svg>
                                Ảnh
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            @if($item->media_type == 'video')
                            <video class="w-32 h-20 object-cover rounded-lg shadow-sm" controls>
                                <source src="{{ Storage::url($item->media_path) }}" type="video/mp4">
                            </video>
                            @else
                            <img src="{{ Storage::url($item->media_path) }}"
                                alt="{{ $item->title }}"
                                class="w-32 h-20 object-cover rounded-lg shadow-sm hover:shadow-md transition-shadow cursor-pointer"
                                onclick="openImageModal('{{ Storage::url($item->media_path) }}', '{{ $item->title }}')">
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-700 font-medium">{{ $item->title ?? 'Không có tiêu đề' }}</p>
                        </td>
                        <td class="px-6 py-4">
                            <p class="text-gray-600 text-sm">{{ $item->description ?? 'Không có mô tả' }}</p>
                        </td>
                        <td class="px-6 py-4">
                            @if($item->is_active)
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                Hiển thị
                            </span>
                            @else
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd"></path>
                                </svg>
                                Ẩn
                            </span>
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex gap-2">
                                <a href="{{ route('admin.lookbook.edit', $item) }}"
                                    class="bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    Sửa
                                </a>
                                <form action="{{ route('admin.lookbook.destroy', $item) }}"
                                    method="POST"
                                    onsubmit="return confirm('Bạn có chắc muốn xóa item này?')"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors flex items-center gap-1">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                        </svg>
                                        Xóa
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-12 text-center">
                            <div class="flex flex-col items-center justify-center">
                                <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                                <p class="text-gray-500 text-lg font-medium">Chưa có lookbook item nào!</p>
                                <p class="text-gray-400 mt-1">Hãy thêm video và ảnh cho lookbook của bạn</p>
                                <a href="{{ route('admin.lookbook.create') }}"
                                    class="mt-4 bg-gradient-to-r from-pink-500 to-rose-500 text-white px-6 py-2 rounded-lg font-semibold hover:shadow-lg transition-all">
                                    Thêm Item Ngay
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Info Card -->
    <div class="mt-6 bg-blue-50 border border-blue-200 rounded-lg p-4">
        <div class="flex">
            <svg class="w-5 h-5 text-blue-500 mr-2 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <p class="text-sm text-blue-800 font-medium">Lưu ý về Lookbook</p>
                <ul class="text-sm text-blue-700 mt-2 list-disc list-inside space-y-1">
                    <li>Tối đa 3 items: 1 video (vị trí 1) + 2 ảnh (vị trí 2-3)</li>
                    <li>Video: MP4, MOV, AVI - Tối đa 50MB</li>
                    <li>Ảnh: JPG, PNG, WEBP - Tối đa 50MB</li>
                    <li>Hệ thống tự động gán vị trí trống</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Image Modal -->
<div id="imageModal" class="hidden fixed inset-0 bg-black bg-opacity-75 z-50 flex items-center justify-center p-4" onclick="closeImageModal()">
    <div class="relative max-w-4xl max-h-full">
        <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white hover:text-gray-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <img id="modalImage" src="" alt="" class="max-w-full max-h-[90vh] rounded-lg">
    </div>
</div>

<script>
    function openImageModal(src, alt) {
        document.getElementById('imageModal').classList.remove('hidden');
        document.getElementById('modalImage').src = src;
        document.getElementById('modalImage').alt = alt;
    }

    function closeImageModal() {
        document.getElementById('imageModal').classList.add('hidden');
    }
</script>
@endsection