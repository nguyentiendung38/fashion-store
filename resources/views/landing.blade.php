@extends('layouts.app')

@section('title', 'Lynlydesign Fashion - Thời trang nữ cao cấp')

@section('content')
<!-- ===== HERO BANNER - GIỚI THIỆU ===== -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-slate-900 via-pink-900 to-rose-900 pt-28 md:pt-32">
    <!-- Background Animation -->
    <div class="absolute inset-0 opacity-20">
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-rose-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>
    <!-- Content -->
    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Text Content -->
            <div class="text-white space-y-8">
                <div class="inline-block">
                    <span class="px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full text-sm font-semibold flex items-center gap-2 w-fit">
                        <span class="w-2 h-2 bg-pink-400 rounded-full animate-pulse"></span>
                        New Collection 2024
                    </span>
                </div>

                <h1 class="text-5xl md:text-7xl font-bold leading-tight">
                    Định Nghĩa Lại
                    <span class="block bg-gradient-to-r from-pink-300 via-rose-300 to-purple-300 bg-clip-text text-transparent">
                        Phong Cách
                    </span>
                    Của Bạn
                </h1>

                <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-xl">
                    Khám phá bộ sưu tập thời trang nữ cao cấp, nơi sự thanh lịch gặp gỡ hiện đại.
                    Mỗi thiết kế là một tác phẩm nghệ thuật, tôn vinh vẻ đẹp tự nhiên của bạn.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#collections" class="group relative px-8 py-4 bg-white text-slate-900 font-bold rounded-full overflow-hidden transition-all hover:scale-105 hover:shadow-2xl hover:shadow-pink-500/50">
                        <span class="relative z-10 group-hover:text-white transition-colors">Khám Phá Ngay</span>
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-rose-500 scale-0 group-hover:scale-100 transition-transform origin-center rounded-full"></div>
                    </a>

                    <a href="https://zalo.me/0769223338" target="_blank" class="px-8 py-4 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white font-bold rounded-full hover:bg-white/20 transition-all flex items-center gap-2 hover:scale-105">
                        <i class="fas fa-comments"></i>
                        Tư Vấn Miễn Phí
                    </a>
                </div>

                <!-- Animated Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/20">
                    <div class="stat-item">
                        <div class="text-3xl font-bold text-pink-300">
                            <span class="counter" data-target="10000">0</span>+
                        </div>
                        <div class="text-sm text-slate-400 mt-1">Khách Hàng</div>
                    </div>
                    <div class="stat-item">
                        <div class="text-3xl font-bold text-rose-300">
                            <span class="counter" data-target="500">0</span>+
                        </div>
                        <div class="text-sm text-slate-400 mt-1">Sản Phẩm</div>
                    </div>
                    <div class="stat-item">
                        <div class="text-3xl font-bold text-purple-300">
                            <span class="counter" data-target="4.9">0</span>★
                        </div>
                        <div class="text-sm text-slate-400 mt-1">Đánh Giá</div>
                    </div>
                </div>
            </div>

            <!-- Image Grid -->
            <!-- Image Grid -->
            <div class="relative lg:h-[600px] hidden lg:block">
                <div class="grid grid-cols-2 gap-4 h-full">
                    <!-- Cột trái - Vị trí 1 và 2 -->
                    <div class="space-y-4">
                        @php
                        $position1 = $heroImages->where('position', 1)->where('is_active', true)->first();
                        $position2 = $heroImages->where('position', 2)->where('is_active', true)->first();
                        @endphp

                        <!-- Vị trí 1 (Trên - Trái) -->
                        <div class="relative rounded-2xl overflow-hidden h-64 group">
                            @if($position1)
                            <img src="{{ Storage::url($position1->image) }}"
                                alt="{{ $position1->alt_text ?? 'Fashion' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                            <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?q=80&w=600"
                                alt="Fashion"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @endif
                        </div>

                        <!-- Vị trí 2 (Dưới - Trái) -->
                        <div class="relative rounded-2xl overflow-hidden h-80 group">
                            @if($position2)
                            <img src="{{ Storage::url($position2->image) }}"
                                alt="{{ $position2->alt_text ?? 'Fashion' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                            <img src="https://images.unsplash.com/photo-1515372039744-b8f02a3ae446?q=80&w=600"
                                alt="Fashion"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @endif
                        </div>
                    </div>

                    <!-- Cột phải - Vị trí 3 và 4 -->
                    <div class="space-y-4 pt-12">
                        @php
                        $position3 = $heroImages->where('position', 3)->where('is_active', true)->first();
                        $position4 = $heroImages->where('position', 4)->where('is_active', true)->first();
                        @endphp

                        <!-- Vị trí 3 (Trên - Phải) -->
                        <div class="relative rounded-2xl overflow-hidden h-80 group">
                            @if($position3)
                            <img src="{{ Storage::url($position3->image) }}"
                                alt="{{ $position3->alt_text ?? 'Fashion' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                            <img src="https://images.unsplash.com/photo-1591369822096-ffd140ec948f?q=80&w=600"
                                alt="Fashion"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @endif
                        </div>

                        <!-- Vị trí 4 (Dưới - Phải) -->
                        <div class="relative rounded-2xl overflow-hidden h-64 group">
                            @if($position4)
                            <img src="{{ Storage::url($position4->image) }}"
                                alt="{{ $position4->alt_text ?? 'Fashion' }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @else
                            <img src="https://images.unsplash.com/photo-1539008835657-9e8e9680c956?q=80&w=600"
                                alt="Fashion"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
</section>

<!-- ===== MỚI: FLASH SALE BANNER ===== -->
<section class="py-6 bg-gradient-to-r from-pink-500 via-rose-500 to-red-500 text-white shadow-lg">
    <div class="container mx-auto px-6">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <div class="bg-white/20 p-3 rounded-lg">
                    <i class="fas fa-bolt text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold">FLASH SALE 50%</h3>
                    <p class="text-sm opacity-90">Chỉ hôm nay - Miễn phí ship toàn quốc</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="text-center">
                    <div class="countdown-item bg-white px-4 py-2 rounded-lg text-black font-bold text-xl">
                        <span id="hours">12</span>
                    </div>
                    <p class="text-xs mt-1">Giờ</p>
                </div>
                <span class="text-2xl font-bold">:</span>
                <div class="text-center">
                    <div class="countdown-item bg-white px-4 py-2 rounded-lg text-black font-bold text-xl">
                        <span id="minutes">34</span>
                    </div>
                    <p class="text-xs mt-1">Phút</p>
                </div>
                <span class="text-2xl font-bold">:</span>
                <div class="text-center">
                    <div class="countdown-item bg-white px-4 py-2 rounded-lg text-black font-bold text-xl">
                        <span id="seconds">56</span>
                    </div>
                    <p class="text-xs mt-1">Giây</p>
                </div>
            </div>
            <a href="#collections" class="bg-white text-pink-600 font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all whitespace-nowrap">
                Mua ngay
            </a>
        </div>
    </div>
</section>
<section class="py-20 md:py-32 bg-gradient-to-b from-white to-pink-50/30">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-12 md:mb-16">
            <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4">
                Tại sao chọn chúng tôi
            </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Trải Nghiệm Mua Sắm <span class="gradient-text">Hoàn Hảo</span>
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
            <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4">
                Danh mục
            </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Mua Sắm Theo <span class="gradient-text">Phong Cách</span>
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
            <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4">
                Lookbook
            </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Bộ Sưu Tập <span class="gradient-text">Thu Đông 2024</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Khám phá phong cách thời trang mới nhất từ lynlydesign Fashion
            </p>
        </div>

        <!-- Lưới Lookbook -->
        <div class="grid md:grid-cols-2 gap-6 items-stretch">
            <!-- Video chính -->
            <div id="video-container" class="relative rounded-2xl overflow-hidden group cursor-pointer">
                <video id="lookbook-video" loop playsinline class="w-full h-full object-cover">
                    <source src="{{ asset('images/khachhang/video.mp4') }}" type="video/mp4">
                    Trình duyệt của bạn không hỗ trợ video.
                </video>

                <!-- Overlay -->
                <div id="video-overlay"
                    class="absolute inset-0 flex items-center justify-center bg-black/40 transition-all">
                    <div class="w-20 h-20 bg-white/90 rounded-full flex items-center justify-center">
                        <i class="fas fa-play text-pink-600 text-2xl ml-1"></i>
                    </div>
                </div>

                <!-- Caption -->
                <div
                    class="absolute bottom-0 left-0 right-0 p-8 text-white bg-gradient-to-t from-black/70 via-black/30 to-transparent z-10">
                    <h3 class="text-2xl font-bold mb-2">Lookbook Thu Đông 2024</h3>
                    <p class="text-sm opacity-90">Xem video giới thiệu bộ sưu tập mới nhất</p>
                </div>
            </div>

            <!-- Cột ảnh bên phải -->
            <div class="flex flex-col gap-6">
                <!-- Ảnh Lookbook 1 -->
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="{{ asset('images/khachhang/anh9.jpg') }}" alt="Look 1"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute bottom-0 p-6 text-white">
                            <h4 class="font-bold text-lg">Elegant Office Look</h4>
                            <p class="text-sm">Thanh lịch &amp; Chuyên nghiệp</p>
                        </div>
                    </div>
                </div>

                <!-- Ảnh Lookbook 2 -->
                <div class="relative rounded-2xl overflow-hidden group">
                    <img src="{{ asset('images/khachhang/anh10.jpg') }}" alt="Look 2"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <div class="absolute bottom-0 p-6 text-white">
                            <h4 class="font-bold text-lg">Casual Weekend Style</h4>
                            <p class="text-sm">Thoải mái &amp; Trẻ trung</p>
                        </div>
                    </div>
                </div>
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

<!-- TESTIMONIALS SECTION -->
<section class="py-20 md:py-32 bg-gradient-to-b from-white to-slate-50">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16"> <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4"> Đánh giá khách hàng </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900"> Khách Hàng <span class="gradient-text">Nói Gì</span> </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed"> Hơn 10,000+ khách hàng hài lòng với sản phẩm và dịch vụ của chúng tôi </p>
        </div>
        <div class="grid md:grid-cols-3 gap-8"> <!-- Testimonial 1 -->
            <div class="testimonial-card bg-white rounded-2xl p-8 shadow-md border border-slate-100">
                <div class="star-rating flex gap-1 mb-4"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                <p class="text-slate-700 leading-relaxed mb-6 italic"> "Váy đẹp lắm, chất vải mịn màng, form dáng ôm vừa vặn. Mình đã giới thiệu cho bạn bè rồi. Shop tư vấn nhiệt tình, giao hàng nhanh!" </p>
                <div class="flex items-center gap-4"> <img src="https://i.pravatar.cc/150?img=1" alt="Customer" class="w-12 h-12 rounded-full object-cover border-2 border-pink-200">
                    <div>
                        <h4 class="font-semibold text-slate-900">Nguyễn Thảo My</h4>
                        <p class="text-sm text-slate-500">Hà Nội</p>
                    </div>
                </div>
            </div> <!-- Testimonial 2 -->
            <div class="testimonial-card bg-white rounded-2xl p-8 shadow-md border border-slate-100">
                <div class="star-rating flex gap-1 mb-4"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                <p class="text-slate-700 leading-relaxed mb-6 italic"> "Lần đầu mua online mà không thất vọng. Sản phẩm đẹp như hình, chất lượng vượt mong đợi. Chắc chắn sẽ ủng hộ shop dài dài!" </p>
                <div class="flex items-center gap-4"> <img src="https://i.pravatar.cc/150?img=5" alt="Customer" class="w-12 h-12 rounded-full object-cover border-2 border-pink-200">
                    <div>
                        <h4 class="font-semibold text-slate-900">Trần Minh Anh</h4>
                        <p class="text-sm text-slate-500">TP. Hồ Chí Minh</p>
                    </div>
                </div>
            </div> <!-- Testimonial 3 -->
            <div class="testimonial-card bg-white rounded-2xl p-8 shadow-md border border-slate-100">
                <div class="star-rating flex gap-1 mb-4"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> </div>
                <p class="text-slate-700 leading-relaxed mb-6 italic"> "Shop phục vụ chu đáo, nhiệt tình. Váy đẹp, sang trọng, đi làm hay đi chơi đều ổn. Đã order thêm 2 cái nữa rồi nè!" </p>
                <div class="flex items-center gap-4"> <img src="https://i.pravatar.cc/150?img=9" alt="Customer" class="w-12 h-12 rounded-full object-cover border-2 border-pink-200">
                    <div>
                        <h4 class="font-semibold text-slate-900">Lê Phương Linh</h4>
                        <p class="text-sm text-slate-500">Đà Nẵng</p>
                    </div>
                </div>
            </div>
        </div> <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 pt-16 border-t border-slate-200">
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">10K+</div>
                <p class="text-slate-600">Khách hàng</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">500+</div>
                <p class="text-slate-600">Sản phẩm</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">4.9/5</div>
                <p class="text-slate-600">Đánh giá</p>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold gradient-text mb-2">100%</div>
                <p class="text-slate-600">Hài lòng</p>
            </div>
        </div>
    </div>
</section>
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
<section id="contact" class="py-20 md:py-32 bg-background">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-primary">Liên Hệ & Tư Vấn</h2>
            <p class="mt-4 text-lg text-muted leading-relaxed">Chúng tôi luôn sẵn sàng lắng nghe và tư vấn. Hãy kết nối với Lynlydesign Fashion ngay hôm nay.</p>
        </div>
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                <p class="flex items-start text-lg"><i class="fas fa-map-marker-alt text-secondary w-6 pt-1"></i> <span class="ml-4 text-muted">96a Ngõ 1194 Đường Láng - Láng Thượng - Đống Đa - Hà Nội</span></p>
                <p class="flex items-start text-lg"><i class="fas fa-phone-alt text-secondary w-6 pt-1"></i> <span class="ml-4 text-muted">0769.223.338</span></p>
                <p class="flex items-start text-lg"><i class="fas fa-envelope text-secondary w-6 pt-1"></i> <span class="ml-4 text-muted">lynlydesign2022@gmail.com</span></p>
                <a href="https://zalo.me/0769223338" target="_blank" class="mt-8 inline-block bg-primary text-white font-semibold py-4 px-8 rounded-md hover:bg-black transition-all">Chat ngay qua Zalo</a>
            </div>
            <div class="rounded-lg overflow-hidden shadow-xl h-96">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.135293026335!2d105.7981559759247!3d21.02724498062228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab554522855f%3A0x624933748e7150a!2zTmcuIDExOTQgUC4gTMOhbmcsIEzDoW5nIFRoxrDhu6NuZywgxJDhu5FuZyDEkGEsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1699999999999!5m2!1svi!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-stone-100/60">
    <div class="container mx-auto px-6 text-center">
        <div class="max-w-2xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-primary">Đừng Bỏ Lỡ Ưu Đãi</h2>
            <p class="mt-4 text-lg text-muted leading-relaxed">Đăng ký để nhận thông tin về sản phẩm mới, các chương trình khuyến mãi độc quyền và xu hướng thời trang mới nhất.</p>
            <form action="#" method="POST" class="mt-8 flex flex-col sm:flex-row gap-3 max-w-lg mx-auto">
                <input type="email" name="email" placeholder="Nhập email của bạn..." required class="w-full px-5 py-3 bg-white border border-stone-200 rounded-md focus:ring-2 focus:ring-secondary focus:outline-none transition">
                <button type="submit" class="bg-primary text-white font-semibold py-3 px-6 rounded-md hover:bg-black transition-all shrink-0">Đăng Ký</button>
            </form>
        </div>
    </div>
</section>
<section class="py-20 md:py-32 bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="inline-block px-4 py-2 bg-pink-100 text-pink-600 rounded-full text-sm font-semibold mb-4">
                Câu hỏi thường gặp
            </span>
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight text-slate-900">
                Giải Đáp <span class="gradient-text">Thắc Mắc</span>
            </h2>
            <p class="mt-4 text-lg text-slate-600 leading-relaxed">
                Những câu hỏi khách hàng thường gặp khi mua sắm tại Lynlydesign Fashion
            </p>
        </div>
        <div class="max-w-3xl mx-auto space-y-4">
            <!-- FAQ 1 -->
            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                    <span>Làm sao để chọn size phù hợp?</span>
                    <i class="fas fa-chevron-down text-pink-600 transition-transform"></i>
                </button>
                <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                    Bạn có thể tham khảo bảng size chi tiết trên mỗi sản phẩm. Nếu vẫn chưa chắc chắn, hãy inbox cho shop qua Zalo để được tư vấn size phù hợp nhất dựa trên số đo của bạn. Shop luôn sẵn sàng hỗ trợ 24/7!
                </div>
            </div>
            <!-- FAQ 2 -->
            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                    <span>Chính sách đổi trả như thế nào?</span>
                    <i class="fas fa-chevron-down text-pink-600 transition-transform"></i>
                </button>
                <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                    Lynlydesign Fashion hỗ trợ đổi trả trong vòng 7 ngày nếu sản phẩm bị lỗi từ nhà sản xuất. Sản phẩm đổi trả phải còn nguyên tem mác, chưa qua sử dụng. Chi phí vận chuyển đổi trả sẽ do shop chịu nếu lỗi từ shop.
                </div>
            </div>
            <!-- FAQ 3 -->
            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                    <span>Thời gian giao hàng bao lâu?</span>
                    <i class="fas fa-chevron-down text-pink-600 transition-transform"></i>
                </button>
                <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                    Đơn hàng nội thành Hà Nội: 1-2 ngày. Đơn hàng các tỉnh thành khác: 2-4 ngày làm việc. Shop sẽ gửi mã vận đơn để bạn theo dõi đơn hàng của mình nhé!
                </div>
            </div>
            <!-- FAQ 4 -->
            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                    <span>Sản phẩm được làm từ chất liệu gì?</span>
                    <i class="fas fa-chevron-down text-pink-600 transition-transform"></i>
                </button>
                <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                    100% sản phẩm của Lynlydesign Fashion được làm từ vải cao cấp nhập khẩu: vải Kate, vải Lụa, vải Tuysi, vải Thô... Mỗi sản phẩm đều có mô tả chi tiết về chất liệu để bạn dễ dàng lựa chọn.
                </div>
            </div>
            <!-- FAQ 5 -->
            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                    <span>Có hỗ trợ thanh toán COD không?</span>
                    <i class="fas fa-chevron-down text-pink-600 transition-transform"></i>
                </button>
                <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                    Có! Shop hỗ trợ thanh toán COD (thanh toán khi nhận hàng) cho tất cả đơn hàng. Bạn cũng có thể chuyển khoản trước để được ưu tiên xử lý đơn hàng nhanh hơn và nhận thêm voucher giảm giá.
                </div>
            </div>
            <!-- FAQ 6 -->
            <div class="faq-item bg-white border border-slate-200 rounded-xl overflow-hidden">
                <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                    <span>Có cửa hàng offline để thử đồ không?</span>
                    <i class="fas fa-chevron-down text-pink-600 transition-transform"></i>
                </button>
                <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                    Có! Showroom của shop tại: 96a Ngõ 1194 Đường Láng - Láng Thượng - Đống Đa - Hà Nội. Bạn có thể ghé trực tiếp để xem và thử sản phẩm. Nên inbox trước để shop sắp xếp và tư vấn tốt nhất nhé!
                </div>
            </div>
        </div>
        <div class="text-center mt-12">
            <p class="text-slate-600 mb-4">Vẫn còn thắc mắc?</p>
            <a href="https://zalo.me/0769223338" target="_blank" class="inline-flex items-center gap-2 bg-primary text-white font-semibold py-3 px-8 rounded-lg hover:bg-black transition-all">
                <i class="fas fa-comments"></i>
                Chat với chúng tôi
            </a>
        </div>
    </div>
</section>
@endsection