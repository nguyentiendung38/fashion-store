@extends('admin.dashboard')

@section('content')
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">

    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-gray-800">Quản lý Bộ Sưu Tập</h2>
        <a href="{{ route('admin.collections.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out transform hover:scale-105">
            Thêm mới
        </a>
    </div>

    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-md" role="alert">
        <p>{{ session('success') }}</p>
    </div>
    @endif

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="block w-full overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 border-b-2 border-gray-200">
                    <tr>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Ảnh</th>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Tên</th>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Giá</th>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Giảm</th>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Mô tả</th>
                        <th class="p-4 text-left text-sm font-semibold text-gray-600 uppercase tracking-wider">Thao tác</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($collections as $collection)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 whitespace-nowrap text-gray-700">{{ $collection->id }}</td>
                        <td class="p-4 whitespace-nowrap">
                            <img src="{{ Storage::url($collection->image) }}"
                                alt="{{ $collection->name }}"
                                class="w-20 h-20 object-cover rounded-md">
                        </td>
                        <td class="p-4 whitespace-nowrap font-medium text-gray-900">{{ $collection->name }}</td>

                        {{-- Giá gốc --}}
                        <td class="p-4 whitespace-nowrap text-gray-700">
                            {{ number_format($collection->price, 0, ',', '.') }}đ
                        </td>

                        {{-- Giảm giá --}}
                        <td class="p-4 whitespace-nowrap text-gray-700">
                            {{ $collection->discount ? $collection->discount . '%' : 'Không' }}
                        </td>
                        {{-- Mô tả --}}
                        <td class="p-4 text-sm text-gray-600 max-w-xs truncate">
                            {{ $collection->description }}
                        </td>

                        {{-- Thao tác --}}
                        <td class="p-4 whitespace-nowrap">
                            <div class="flex items-center gap-x-3">
                                <a href="{{ route('admin.collections.edit', $collection) }}"
                                    class="bg-sky-500 hover:bg-sky-600 text-white py-1 px-3 rounded-md text-sm font-medium transition duration-200">
                                    Sửa
                                </a>

                                <form action="{{ route('admin.collections.destroy', $collection) }}" method="POST"
                                    onsubmit="return confirm('Bạn có chắc muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded-md text-sm font-medium transition duration-200">
                                        Xóa
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center py-10 text-gray-500">
                            Chưa có bộ sưu tập nào 🤷‍♀️
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-6">
        <a href="/"
            class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-lg transition duration-300">
            Quay lại trang chủ
        </a>
    </div>
</div>
@endsection