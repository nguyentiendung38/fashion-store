@extends('layouts.app')

@section('title', $hotTrend->name . ' - Lynlydesign Fashion')

@section('content')
<div class="bg-white">
    <div class="pt-24 pb-16 sm:pb-24">
        <div class="container mx-auto px-6">
            <div class="max-w-6xl mx-auto">
                {{-- MỚI THÊM: Breadcrumbs để điều hướng tốt hơn --}}
                <nav aria-label="Breadcrumb">
                    <ol role="list" class="flex items-center space-x-2 text-sm">
                        <li><a href="{{ url('/') }}" class="font-medium text-gray-500 hover:text-gray-700">Trang chủ</a></li>
                        <li>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
                                <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                            </svg>
                        </li>
                        <li><a href="#" class="font-medium text-gray-500 hover:text-gray-700">Hot Trend</a></li>
                    </ol>
                </nav>

                {{-- Main Grid --}}
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10">

                    {{-- Cột bên trái: Gallery ảnh sản phẩm (Giữ nguyên) --}}
                    <div class="space-y-4">
                        {{-- Slider ảnh chính --}}
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper main-swiper w-full rounded-lg overflow-hidden border border-gray-200">
                            <div class="swiper-wrapper">
                                {{-- Slide cho ảnh đại diện --}}
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $hotTrend->image) }}" alt="{{ $hotTrend->name }}" class="gallery-image h-full w-full object-cover object-center cursor-pointer aspect-[3/4]">
                                </div>
                                {{-- Slides cho các ảnh phụ --}}
                                @foreach($hotTrend->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $image->image) }}" alt="Ảnh chi tiết sản phẩm" class="gallery-image h-full w-full object-cover object-center cursor-pointer aspect-[3/4]">
                                </div>
                                @endforeach
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        {{-- Slider ảnh thu nhỏ (Thumbnail) --}}
                        <div thumbsSlider="" class="swiper thumb-swiper">
                            <div class="swiper-wrapper">
                                {{-- Thumbnail cho ảnh đại diện --}}
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $hotTrend->image) }}" class="h-24 w-full object-cover rounded-md border border-gray-200 cursor-pointer">
                                </div>
                                {{-- Thumbnails cho các ảnh phụ --}}
                                @foreach($hotTrend->images as $image)
                                <div class="swiper-slide">
                                    <img src="{{ asset('storage/' . $image->image) }}" class="h-24 w-full object-cover rounded-md border border-gray-200 cursor-pointer">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    {{-- === BẮT ĐẦU PHẦN NÂNG CẤP CỘT BÊN PHẢI === --}}
                    <div class="space-y-8">
                        <div>
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $hotTrend->name }}</h1>
                            <div class="mt-3 flex items-baseline gap-4">
                                @php
                                    $hasDiscount = !empty($hotTrend->discount) && $hotTrend->discount > 0;
                                    $finalPrice = $hasDiscount ? $hotTrend->price * (1 - $hotTrend->discount / 100) : $hotTrend->price;
                                @endphp
                                <span class="text-3xl tracking-tight text-rose-500 font-bold">
                                    {{ number_format($finalPrice, 0, ',', '.') }}đ
                                </span>
                                @if($hasDiscount)
                                <span class="text-xl tracking-tight text-gray-400 line-through">
                                    {{ number_format($hotTrend->price, 0, ',', '.') }}đ
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="prose prose-sm text-gray-600 leading-relaxed max-w-none">
                            <p>{{ $hotTrend->description }}</p>
                        </div>
                        
                        {{-- MỚI THÊM: Lựa chọn màu sắc (ví dụ) --}}
                        <div>
                            <h3 class="text-sm font-medium text-gray-900">Màu sắc</h3>
                            <div id="color-selector" class="mt-4 flex items-center space-x-3">
                                <button data-color="Trắng" class="h-8 w-8 rounded-full bg-white border-2 border-gray-900 ring-2 ring-offset-1 ring-gray-900" aria-label="Trắng"></button>
                                <button data-color="Đen" class="h-8 w-8 rounded-full bg-gray-800 border-2 border-gray-200" aria-label="Đen"></button>
                            </div>
                        </div>

                        {{-- MỚI THÊM: Lựa chọn Kích cỡ (ví dụ) --}}
                        <div>
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">Kích cỡ</h3>
                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Bảng size</a>
                            </div>
                            <div id="size-selector" class="mt-4 grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                <button class="size-option group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1">S</button>
                                <button class="size-option group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 border-gray-900 bg-gray-900 text-white">M</button>
                                <button class="size-option group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1">L</button>
                            </div>
                        </div>

                        {{-- MỚI THÊM: Số lượng & CTA --}}
                        <div class="flex items-center gap-6">
                            <div class="flex items-center border border-gray-300 rounded-md">
                                <button id="decrement-qty" class="px-3 py-2 text-gray-600 hover:bg-gray-100">-</button>
                                <input id="quantity" type="text" value="1" class="w-12 text-center border-x border-gray-300 focus:outline-none focus:ring-0">
                                <button id="increment-qty" class="px-3 py-2 text-gray-600 hover:bg-gray-100">+</button>
                            </div>
                            <a href="https://zalo.me/0769223338" target="_blank" class="flex-1 w-full flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700">
                                Liên hệ Zalo
                            </a>
                        </div>
                        
                        {{-- MỚI THÊM: Accordion chi tiết --}}
                        <div class="border-t border-gray-200 pt-8 space-y-6">
                            <div>
                                <button class="accordion-toggle flex w-full items-center justify-between text-left text-gray-900">
                                    <span class="font-medium">Thông tin chi tiết</span>
                                    <span class="accordion-icon ml-6 flex items-center">&plus;</span>
                                </button>
                                <div class="accordion-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                    <div class="prose prose-sm text-gray-600 pt-4">
                                        <ul>
                                            <li>Chất liệu: Vui lòng liên hệ để biết chi tiết</li>
                                            <li>Kiểu dáng: Vui lòng liên hệ để biết chi tiết</li>
                                            <li>Xuất xứ: Việt Nam</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button class="accordion-toggle flex w-full items-center justify-between text-left text-gray-900">
                                    <span class="font-medium">Vận chuyển & Đổi trả</span>
                                    <span class="accordion-icon ml-6 flex items-center">&plus;</span>
                                </button>
                                <div class="accordion-content overflow-hidden max-h-0 transition-all duration-500 ease-in-out">
                                    <div class="prose prose-sm text-gray-600 pt-4">
                                        <p>Miễn phí vận chuyển cho đơn hàng từ 500.000đ. Hỗ trợ đổi trả trong vòng 7 ngày nếu sản phẩm có lỗi từ nhà sản xuất.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Lightbox Modal (Giữ nguyên) --}}
<div id="lightbox-overlay" class="fixed inset-0 bg-black bg-opacity-80 flex justify-center items-center p-4 z-50 hidden">
    <div class="relative max-w-4xl max-h-full">
        <button id="lightbox-close" class="absolute -top-4 -right-4 md:top-0 md:-right-12 text-white text-3xl bg-transparent border-none cursor-pointer leading-none z-10">&times;</button>
        <img id="lightbox-image" src="" alt="Xem ảnh lớn" class="max-w-full max-h-[90vh] object-contain">
    </div>
</div>

{{-- SwiperJS --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

{{-- Script chính cho các chức năng (cần được tách ra file riêng) --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- LOGIC CHO GALLERY ẢNH ---
        const thumbSwiper = new Swiper(".thumb-swiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        const mainSwiper = new Swiper(".main-swiper", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: thumbSwiper,
            },
        });

        // --- LOGIC LIGHTBOX ---
        const galleryImages = document.querySelectorAll('.gallery-image');
        const lightboxOverlay = document.getElementById('lightbox-overlay');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxClose = document.getElementById('lightbox-close');

        const openLightbox = (imageUrl) => {
            if (imageUrl) {
                lightboxImage.src = imageUrl;
                lightboxOverlay.classList.remove('hidden');
            }
        };
        const closeLightbox = () => {
            lightboxOverlay.classList.add('hidden');
        };

        galleryImages.forEach(img => {
            img.addEventListener('click', () => openLightbox(img.src));
        });

        if(lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
        if(lightboxOverlay) lightboxOverlay.addEventListener('click', (event) => {
            if (event.target === lightboxOverlay) closeLightbox();
        });
        document.addEventListener('keydown', (event) => {
            if (event.key === 'Escape') closeLightbox();
        });

        // --- LOGIC GIAO DIỆN TƯƠNG TÁC ---
        const colorSelector = document.getElementById('color-selector');
        if (colorSelector) {
            const colorButtons = colorSelector.querySelectorAll('button');
            colorButtons.forEach(button => {
                button.addEventListener('click', () => {
                    colorButtons.forEach(btn => btn.classList.remove('ring-2', 'ring-offset-1', 'ring-gray-900', 'border-gray-900'));
                    button.classList.add('ring-2', 'ring-offset-1', 'ring-gray-900', 'border-gray-900');
                });
            });
        }

        const sizeSelector = document.getElementById('size-selector');
        if (sizeSelector) {
            const sizeButtons = sizeSelector.querySelectorAll('.size-option:not(.cursor-not-allowed)');
            sizeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    sizeButtons.forEach(btn => btn.classList.remove('bg-gray-900', 'text-white', 'border-gray-900'));
                    button.classList.add('bg-gray-900', 'text-white', 'border-gray-900');
                });
            });
        }
        
        const qtyInput = document.getElementById('quantity');
        const decrementBtn = document.getElementById('decrement-qty');
        const incrementBtn = document.getElementById('increment-qty');
        if (qtyInput && decrementBtn && incrementBtn) {
            decrementBtn.addEventListener('click', () => {
                let currentVal = parseInt(qtyInput.value);
                if (currentVal > 1) qtyInput.value = currentVal - 1;
            });
            incrementBtn.addEventListener('click', () => {
                qtyInput.value = parseInt(qtyInput.value) + 1;
            });
        }
        
        const accordions = document.querySelectorAll('.accordion-toggle');
        accordions.forEach(accordion => {
            accordion.addEventListener('click', () => {
                const content = accordion.nextElementSibling;
                const icon = accordion.querySelector('.accordion-icon');
                if (content.style.maxHeight) {
                    content.style.maxHeight = null;
                    icon.innerHTML = '&plus;';
                } else {
                    content.style.maxHeight = content.scrollHeight + 'px';
                    icon.innerHTML = '&minus;';
                }
            });
        });
    });
</script>
@endsection