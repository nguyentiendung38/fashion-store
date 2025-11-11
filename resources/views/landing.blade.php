@extends('layouts.app')

@section('title', 'Lynlydesign Fashion - Thời trang nữ cao cấp')

@section('content')

<!-- ===== MỚI: CATEGORIES SECTION ===== -->
<section class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Mua Sắm Theo <span class="gradient-text-black">Phong Cách</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Tìm kiếm sản phẩm phù hợp với phong cách và nhu cầu của bạn
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @forelse($categoryBanners as $banner)
            <!-- Category {{ $banner->position }} -->
            <a href="#" class="category-card group relative rounded-2xl overflow-hidden aspect-[3/4] shadow-lg">
                <img src="{{ Storage::url($banner->image) }}"
                    alt="{{ $banner->description ?? 'Category Banner' }}"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                    @if($banner->description)
                    <h3 class="text-xl font-bold px-4 text-center">{{ $banner->description }}</h3>
                    @endif
                </div>
            </a>
            @empty
            <!-- Fallback: Hiển thị banner mặc định khi chưa có dữ liệu từ admin -->
            <a href="#" class="category-card group relative rounded-2xl overflow-hidden aspect-[3/4] shadow-lg">
                <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=600&auto=format&fit=crop" alt="Váy Công Sở" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                    <i class="fas fa-briefcase text-3xl mb-3 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    <h3 class="text-xl font-bold">Váy Công Sở</h3>
                    <p class="text-sm opacity-90 mt-1">120+ sản phẩm</p>
                </div>
            </a>
            <a href="#" class="category-card group relative rounded-2xl overflow-hidden aspect-[3/4] shadow-lg">
                <img src="https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?q=80&w=600&auto=format&fit=crop" alt="Váy Dạo Phố" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                    <i class="fas fa-shopping-bag text-3xl mb-3 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    <h3 class="text-xl font-bold">Váy Dạo Phố</h3>
                    <p class="text-sm opacity-90 mt-1">85+ sản phẩm</p>
                </div>
            </a>
            <a href="#" class="category-card group relative rounded-2xl overflow-hidden aspect-[3/4] shadow-lg">
                <img src="https://images.unsplash.com/photo-1591369822096-ffd140ec948f?q=80&w=600&auto=format&fit=crop" alt="Áo Khoác" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                    <i class="fas fa-tshirt text-3xl mb-3 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    <h3 class="text-xl font-bold">Áo Khoác</h3>
                    <p class="text-sm opacity-90 mt-1">60+ sản phẩm</p>
                </div>
            </a>
            <a href="#" class="category-card group relative rounded-2xl overflow-hidden aspect-[3/4] shadow-lg">
                <img src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?q=80&w=600&auto=format&fit=crop" alt="Phụ Kiện" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
                <div class="absolute inset-0 flex flex-col items-center justify-center text-white z-10">
                    <i class="fas fa-gem text-3xl mb-3 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    <h3 class="text-xl font-bold">Phụ Kiện</h3>
                    <p class="text-sm opacity-90 mt-1">45+ sản phẩm</p>
                </div>
            </a>
            @endforelse
        </div>
    </div>
</section>
<section id="collections" class="py-20 md:py-32 bg-stone-100/60">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-800">
                Váy Đầm Mới Nhất
            </h2>
            <p class="mt-4 text-lg text-gray-600 leading-relaxed">
                Những thiết kế được yêu thích nhất, kết hợp giữa chất liệu cao cấp và đường may tinh xảo.
            </p>
        </div>
        <div class="swiper collections-swiper">
            <div class="swiper-wrapper">
                {{-- Lặp qua tất cả collections --}}
                @forelse($collections as $collection)
                @php
                $discount = $collection->discount ?? 0;
                $hasDiscount = $discount > 0;
                $finalPrice = $hasDiscount ? $collection->price * (1 - $discount / 100) : $collection->price;
                @endphp
                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group transition-all duration-300 hover:shadow-2xl">
                        <div class="relative">
                            <a href="{{ route('collections.show', $collection) }}" class="block">
                                <img src="{{ Storage::url($collection->image) }}"
                                    alt="{{ $collection->name }}"
                                    class="w-full aspect-[3/4] object-cover transition-transform duration-500 group-hover:scale-110">
                            </a>

                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                <a href="https://zalo.me/YOUR_PHONE_NUMBER" target="_blank"
                                    class="bg-emerald-500 text-white font-bold py-3 px-6 rounded-full transform scale-75 group-hover:scale-100 transition-transform duration-300 flex items-center gap-2">
                                    <!-- Icon giỏ hàng -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart">
                                        <circle cx="9" cy="21" r="1" />
                                        <circle cx="20" cy="21" r="1" />
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                                    </svg>
                                    <span>Mua Ngay</span>
                                </a>
                            </div>
                            @if($hasDiscount)
                            <span class="absolute top-0 left-0 bg-white text-black text-sm font-bold px-4 py-2 rounded-br-lg shadow-md border border-gray-300">
                                -{{ $discount }}%
                            </span>

                            @endif
                        </div>
                        <div class="p-5 text-left">
                            <h3 class="text-lg font-bold text-gray-800 truncate group-hover:text-emerald-600 transition-colors">
                                {{ $collection->name }}
                            </h3>
                            <div class="mt-2 flex items-baseline gap-2">
                                @if($hasDiscount)
                                <span class="text-xl font-bold text-black-500">
                                    {{ number_format($finalPrice, 0, ',', '.') }}đ
                                </span>
                                <span class="text-sm text-gray-400 line-through">
                                    {{ number_format($collection->price, 0, ',', '.') }}đ
                                </span>
                                @else
                                <p class="text-lg font-semibold text-gray-700">
                                    {{ number_format($collection->price, 0, ',', '.') }}đ
                                </p>
                                @endif
                            </div>
                            <!-- ✅ Nút Xem Chi Tiết -->
                            <div class="mt-4">
                                <a href="{{ route('collections.show', $collection) }}" class="block">
                                    <span class="inline-block bg-white text-black border border-gray-300 hover:bg-black hover:text-white font-semibold py-2 px-5 rounded-full transition-all duration-300">
                                        Xem Chi Tiết
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full text-center py-10">
                    <p class="text-gray-500">Bộ sưu tập mới sẽ sớm được cập nhật!</p>
                </div>
                @endforelse
            </div>
        </div>
        <div class="flex justify-center items-center mt-10 gap-8">
            <div class="swiper-button-prev collections-prev static w-12 h-12"></div>
            <div class="swiper-pagination collections-pagination !static !w-auto"></div>
            <div class="swiper-button-next collections-next static w-12 h-12"></div>
        </div>
    </div>
</section>
<section class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-6">
        <!-- Tiêu đề -->
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Bộ Sưu Tập <span class="gradient-text-black">Thu Đông 2024</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Khám phá phong cách thời trang mới nhất từ lynlydesign Fashion
            </p>
        </div>

        <!-- Lưới Lookbook -->
        <div class="grid md:grid-cols-2 gap-6 items-stretch">
            <!-- Video chính -->
            @if($lookbookVideo)
            <div class="relative rounded-2xl overflow-hidden group cursor-pointer" onclick="toggleVideoPlay(this)">
                <video loop playsinline class="w-full h-full object-cover">
                    <source src="{{ asset('storage/' . $lookbookVideo->media_path) }}" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video.
                </video>

                <!-- Overlay (nút play) -->
                <div class="overlay absolute inset-0 flex items-center justify-center bg-black/40 transition-all">
                    <div class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center">
                        <i class="fas fa-play text-black text-3xl ml-1"></i>
                    </div>
                </div>

                <div class="absolute bottom-0 left-0 right-0 p-8 text-white bg-gradient-to-t from-black/70 via-black/30 to-transparent z-10">
                    <h3 class="text-2xl font-bold mb-2">{{ $lookbookVideo->title }}</h3>
                    <p class="text-base opacity-90">{{ $lookbookVideo->description }}</p>
                </div>
            </div>
            @endif

            <!-- 2 Ảnh -->
            <div class="flex flex-col gap-6">
                @foreach($lookbookImages as $image)
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="{{ asset('storage/' . $image->media_path) }}" alt="{{ $image->title }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute bottom-0 p-6 text-white">
                            <h4 class="font-bold text-xl">{{ $image->title }}</h4>
                            <p class="text-base">{{ $image->description }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="hot-trend" class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-gray-800">Hot Trend Nổi Bật</h2>
            <p class="mt-4 text-lg text-gray-600 leading-relaxed">Cập nhật những mẫu thiết kế hot trend, giúp bạn luôn tự tin và dẫn đầu phong cách.</p>
        </div>

        <div class="swiper hottrend-swiper">
            <div class="swiper-wrapper">
                @forelse($hotTrends as $hotTrend)
                @php
                // Tạo các biến để code dễ đọc và quản lý hơn
                $discount = $hotTrend->discount ?? 0;
                $hasDiscount = $discount > 0;
                $finalPrice = $hasDiscount ? $hotTrend->price * (1 - $discount / 100) : $hotTrend->price;
                @endphp

                <div class="swiper-slide">
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden group transition-all duration-300 hover:shadow-2xl">
                        <div class="relative">
                            <a href="{{ route('products.show', $hotTrend) }}" class="block">
                                <img src="{{ asset('storage/' . $hotTrend->image) }}" alt="{{ $hotTrend->name }}" class="w-full aspect-[3/4] object-cover transition-transform duration-500 group-hover:scale-110">
                            </a>

                            <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                                <a href="https://zalo.me/YOUR_PHONE_NUMBER" target="_blank"
                                    class="bg-emerald-500 text-white font-bold py-3 px-6 rounded-full transform scale-75 group-hover:scale-100 transition-transform duration-300 flex items-center gap-2">
                                    <!-- Icon giỏ hàng -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart">
                                        <circle cx="9" cy="21" r="1" />
                                        <circle cx="20" cy="21" r="1" />
                                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6" />
                                    </svg>
                                    <span>Mua Ngay</span>
                                </a>
                            </div>
                            @if($hasDiscount)
                            <span class="absolute top-0 left-0 bg-white text-black text-sm font-bold px-4 py-2 rounded-br-lg shadow-md border border-gray-300">
                                -{{ $discount }}%
                            </span>
                            @endif
                        </div>

                        <div class="p-5 text-left">
                            <h3 class="text-lg font-bold text-gray-800 truncate group-hover:text-emerald-600 transition-colors">
                                {{ $hotTrend->name }}
                            </h3>

                            <div class="mt-2 flex items-baseline gap-2">
                                @if($hasDiscount)
                                <span class="text-xl font-bold text-black-500">
                                    {{ number_format($finalPrice, 0, ',', '.') }}đ
                                </span>
                                <span class="text-sm text-gray-400 line-through">
                                    {{ number_format($hotTrend->price, 0, ',', '.') }}đ
                                </span>
                                @else
                                <p class="text-lg font-semibold text-gray-700">
                                    {{ number_format($hotTrend->price, 0, ',', '.') }}đ
                                </p>
                                @endif
                            </div>
                            <!-- ✅ Nút Xem Chi Tiết -->
                            <div class="mt-4">
                                <a href="{{ route('products.show', $hotTrend) }}" class="block">
                                    <span class="inline-block bg-white text-black border border-gray-300 hover:bg-black hover:text-white font-semibold py-2 px-5 rounded-full transition-all duration-300">
                                        Xem Chi Tiết
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full text-center py-10">
                    <p class="text-gray-500">Chưa có sản phẩm hot trend nào!</p>
                </div>
                @endforelse
            </div>
        </div>

        <div class="flex justify-center items-center mt-10 gap-8">
            <div class="swiper-button-prev hottrend-prev static w-12 h-12"></div>
            <div class="swiper-pagination hottrend-pagination !static !w-auto"></div>
            <div class="swiper-button-next hottrend-next static w-12 h-12"></div>
        </div>
    </div>
</section>


@if($instagramBanners->count() > 0)
<section class="py-20 md:py-32 bg-gradient-to-b from-white to-pink-50/30">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Khách Hàng <span class="gradient-text-black">Yêu Thích</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Cảm ơn các nàng đã tin tưởng và đồng hành cùng Lynlydesign Fashion
            </p>
        </div>

        <div class="instagram-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach($instagramBanners as $banner)
            <!-- Instagram Post {{ $banner->position }} -->
            <a href="{{ $banner->instagram_url ?? 'https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==' }}"
                target="_blank"
                class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ Storage::url($banner->image_path) }}"
                    alt="Instagram Post {{ $banner->position }}"
                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
            @endforeach
        </div>

        <div class="text-center mt-10">
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="
                target="_blank"
                class="inline-flex items-center gap-2 bg-gradient-to-r  text-black font-semibold py-3 px-8 rounded-lg hover:shadow-lg transition-all">
                <i class="fab fa-instagram text-xl"></i>
                Theo dõi lynlydesign
            </a>
        </div>
    </div>
</section>
@else
<section class="py-20 md:py-32 bg-gradient-to-b from-white to-pink-50/30">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block px-4 py-2 bg-pink-100 text-black-600 rounded-full text-sm font-semibold mb-4">
                @lynlydesign
            </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Khách Hàng <span class="gradient-text">Yêu Thích</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Cảm ơn các nàng đã tin tưởng và đồng hành cùng Lynlydesign Fashion
            </p>
        </div>

        <div class="instagram-grid grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
            <!-- Instagram Post 1 -->
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ asset('images/khachhang/anh1.jpg') }}" alt="Instagram Post" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
            <!-- Instagram Post 2 -->
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ asset('images/khachhang/anh2.jpg') }}" alt="Instagram Post" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
            <!-- Instagram Post 3 -->
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ asset('images/khachhang/anh3.jpg') }}" alt="Instagram Post" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
            <!-- Instagram Post 4 -->
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ asset('images/khachhang/anh4.jpg') }}" alt="Instagram Post" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
            <!-- Instagram Post 5 -->
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ asset('images/khachhang/anh5.jpg') }}" alt="Instagram Post" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
            <!-- Instagram Post 6 -->
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="relative overflow-hidden rounded-lg aspect-square group">
                <img src="{{ asset('images/khachhang/anh6.jpg') }}" alt="Instagram Post" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-white text-3xl"></i>
                </div>
            </a>
        </div>

        <div class="text-center mt-10">
            <a href="https://www.instagram.com/lynlydesign?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-semibold py-3 px-8 rounded-lg hover:shadow-lg transition-all">
                <i class="fab fa-instagram text-xl"></i>
                Theo dõi lynlydesign
            </a>
        </div>
    </div>
</section>
@endif
@endsection