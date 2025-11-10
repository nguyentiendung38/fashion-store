@extends('layouts.app')

@section('title', 'Lynlydesign Fashion - Thời trang nữ cao cấp')

@section('content')

<section class="py-20 md:py-32 bg-gradient-to-b from-white to-pink-50/30">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12 md:mb-16">
            <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4">
                Tại sao chọn chúng tôi
            </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Trải Nghiệm Mua Sắm <span class="gradient-text-black">Hoàn Hảo</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Chúng tôi cam kết mang đến dịch vụ tốt nhất cho khách hàng
            </p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-8 md:gap-8">

            <div class="feature-card group bg-white rounded-2xl p-6 md:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                <div class="feature-icon w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-pink-500 to-rose-500 rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-pink-500/30">
                    <i class="fas fa-gem text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-2">Chất Lượng Cao Cấp</h3>
                <p class="text-slate-600 leading-relaxed text-sm md:text-base">100% vải nhập khẩu, đường may tỉ mỉ, kiểm tra chất lượng nghiêm ngặt.</p>
            </div>

            <div class="feature-card group bg-white rounded-2xl p-6 md:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                <div class="feature-icon w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-purple-500/30">
                    <i class="fas fa-shipping-fast text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-2">Giao Hàng Nhanh</h3>
                <p class="text-slate-600 leading-relaxed text-sm md:text-base">Giao hàng toàn quốc 2-3 ngày. Miễn phí ship đơn hàng từ 500K.</p>
            </div>

            <div class="feature-card group bg-white rounded-2xl p-6 md:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                <div class="feature-icon w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-orange-500/30">
                    <i class="fas fa-sync-alt text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-2">Đổi Trả 7 Ngày</h3>
                <p class="text-slate-600 leading-relaxed text-sm md:text-base">Chính sách đổi trả linh hoạt nếu có lỗi từ nhà sản xuất.</p>
            </div>

            <div class="feature-card group bg-white rounded-2xl p-6 md:p-8 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                <div class="feature-icon w-14 h-14 md:w-16 md:h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-5 shadow-lg shadow-blue-500/30">
                    <i class="fas fa-headset text-white text-xl md:text-2xl"></i>
                </div>
                <h3 class="text-lg md:text-xl font-bold text-slate-900 mb-2">Tư Vấn 24/7</h3>
                <p class="text-slate-600 leading-relaxed text-sm md:text-base">Đội ngũ stylist chuyên nghiệp sẵn sàng tư vấn qua Zalo.</p>
            </div>

        </div>
    </div>
</section>
<!-- ===== MỚI: CATEGORIES SECTION ===== -->
<section class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block px-4 py-2 bg-pink-100 text-black-600 rounded-full text-sm font-semibold mb-4">
                Danh mục
            </span>
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
                            <span class="absolute top-0 left-0 bg-rose-500 text-white text-sm font-bold px-4 py-2 rounded-br-lg shadow-lg">
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
                                <span class="text-xl font-bold text-rose-500">
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
                                    <span class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-5 rounded-full transition-all duration-300">
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
            <span class="inline-block px-4 py-2 bg-pink-100 text-black-600 rounded-full text-sm font-semibold mb-4">
                Lookbook
            </span>
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
            <div class="relative rounded-2xl overflow-hidden group cursor-pointer">
                <video loop playsinline class="w-full h-full object-cover">
                    <source src="{{ asset('storage/' . $lookbookVideo->media_path) }}" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video.
                </video>

                <div class="absolute inset-0 flex items-center justify-center bg-black/40 transition-all">
                    <div class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center">
                        <i class="fas fa-play text-pink-600 text-2xl ml-1"></i>
                    </div>
                </div>

                <div class="absolute bottom-0 left-0 right-0 p-8 text-white bg-gradient-to-t from-black/70 via-black/30 to-transparent z-10">
                    <h3 class="text-2xl font-bold mb-2">{{ $lookbookVideo->title }}</h3>
                    <p class="text-sm opacity-90">{{ $lookbookVideo->description }}</p>
                </div>
            </div>
            @endif

            <!-- 2 Ảnh -->
            <div class="flex flex-col gap-6">
                @foreach($lookbookImages as $image)
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="{{ asset('storage/' . $image->media_path) }}" alt="{{ $image->title }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute bottom-0 p-6 text-white">
                            <h4 class="font-bold text-lg">{{ $image->title }}</h4>
                            <p class="text-sm">{{ $image->description }}</p>
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
                            <span class="absolute top-0 left-0 bg-rose-500 text-white text-sm font-bold px-4 py-2 rounded-br-lg shadow-lg">
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
                                <span class="text-xl font-bold text-rose-500">
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
                                    <span class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-2 px-5 rounded-full transition-all duration-300">
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
<div class="bg-white border-y border-slate-200/60">
    <div class="container mx-auto px-6 py-12 md:py-16">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-10 gap-x-6">

            <div class="flex flex-col items-center text-center group">
                <div class="text-4xl text-slate-400 mb-4 transition-colors duration-300 group-hover:text-pink-500">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h4 class="font-semibold text-slate-800 mb-1">Thanh Toán An Toàn</h4>
                <p class="text-sm text-slate-500">Hỗ trợ VISA, Mastercard & COD</p>
            </div>

            <div class="flex flex-col items-center text-center group">
                <div class="text-4xl text-slate-400 mb-4 transition-colors duration-300 group-hover:text-purple-500">
                    <i class="fas fa-truck-fast"></i>
                </div>
                <h4 class="font-semibold text-slate-800 mb-1">Vận Chuyển Toàn Quốc</h4>
                <p class="text-sm text-slate-500">Giao hàng nhanh từ 2-3 ngày</p>
            </div>

            <div class="flex flex-col items-center text-center group">
                <div class="text-4xl text-slate-400 mb-4 transition-colors duration-300 group-hover:text-rose-500">
                    <i class="fas fa-certificate"></i>
                </div>
                <h4 class="font-semibold text-slate-800 mb-1">Chứng Nhận Chất Lượng</h4>
                <p class="text-sm text-slate-500">Sản phẩm cao cấp, tuyển chọn</p>
            </div>

            <div class="flex flex-col items-center text-center group">
                <div class="text-4xl text-slate-400 mb-4 transition-colors duration-300 group-hover:text-cyan-500">
                    <i class="fas fa-headset"></i>
                </div>
                <h4 class="font-semibold text-slate-800 mb-1">Hỗ Trợ 24/7</h4>
                <p class="text-sm text-slate-500">Tư vấn chuyên nghiệp qua Zalo</p>
            </div>

        </div>
    </div>
</div>

@if($instagramBanners->count() > 0)
<section class="py-20 md:py-32 bg-gradient-to-b from-white to-pink-50/30">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block px-4 py-2 bg-pink-100 text-black-600 rounded-full text-sm font-semibold mb-4">
                @lynlydesign
            </span>
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
            <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4">
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