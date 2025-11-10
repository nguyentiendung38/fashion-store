<!DOCTYPE html>
<html lang="vi" class="scroll-smooth">

<head>
    {{-- Basic Meta Tags --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- Dynamic Title --}}
    <title>@yield('title', 'Lynlydesign Fashion - Thời trang nữ cao cấp')</title>

    {{-- SEO Meta Tags --}}
    <meta name="description" content="@yield('meta_description', 'Lynlydesign Fashion - Thời trang nữ cao cấp, tối giản, hiện đại. Khám phá bộ sưu tập mới, nhận tư vấn và báo giá nhanh qua Zalo.')">
    <meta name="keywords" content="@yield('meta_keywords', 'thời trang nữ, váy, đầm, áo khoác, công sở, dạo phố, lynlydesignfashion, boutique')">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph Meta Tags --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Lynlydesign Fashion - Thời trang nữ cao cấp')">
    <meta property="og:description" content="@yield('og_description', 'Phong cách thanh lịch – hiện đại – tối giản. Tư vấn nhanh qua Zalo.')">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Lynlydesign Fashion">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Lynlydesign Fashion - Thời trang nữ cao cấp')">
    <meta name="twitter:description" content="@yield('og_description', 'Phong cách thanh lịch – hiện đại – tối giản.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-image.jpg'))">

    {{-- Favicon --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">

    {{-- Fonts: Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    {{-- Swiper CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
                    },
                    colors: {
                        'background': '#fdfcfb',
                        'surface': '#ffffff',
                        'primary': '#2c2c2c',
                        'secondary': '#a18a7c',
                        'muted': '#7d7d7d',
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%, 100%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    {{-- Custom Styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">

    {{-- Page-specific Styles --}}
    @stack('styles')
</head>

<body class="font-['Times_New_Roman',_serif]">
    {{-- Header --}}
    @include('partials.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- Social Media Icons (Fixed Bottom Right) --}}
    <div class="fixed bottom-6 right-6 z-50">
        @include('components.social-icons')
    </div>

    {{-- Back to Top Button --}}
<button id="back-to-top"
    class="fixed bottom-6 left-6 bg-primary text-white w-12 h-12 rounded-full shadow-lg opacity-0 invisible transition-all duration-300 hover:bg-secondary z-50"
    aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
</button>


    {{-- JavaScript Libraries --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    {{-- Main JavaScript --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}" defer></script>
    <script src="{{ asset('js/lookbook-video.js') }}"></script>


    {{-- Core Scripts --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log('🚀 App initialized');

            // === HEADER SCROLL EFFECT ===
            const header = document.getElementById('header');
            if (header) {
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 20) {
                        header.classList.add('bg-background/80', 'backdrop-blur-lg', 'shadow-sm');
                    } else {
                        header.classList.remove('bg-background/80', 'backdrop-blur-lg', 'shadow-sm');
                    }
                });
            }

            // === MOBILE MENU TOGGLE ===
            const hamburger = document.getElementById('hamburger');
            const mobileMenu = document.getElementById('mobile-menu');
            if (hamburger && mobileMenu) {
                hamburger.addEventListener('click', () => {
                    mobileMenu.classList.toggle('hidden');

                    // Toggle hamburger icon
                    const icon = hamburger.querySelector('i');
                    if (icon) {
                        icon.classList.toggle('fa-bars');
                        icon.classList.toggle('fa-times');
                    }
                });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
                        mobileMenu.classList.add('hidden');
                        const icon = hamburger.querySelector('i');
                        if (icon) {
                            icon.classList.add('fa-bars');
                            icon.classList.remove('fa-times');
                        }
                    }
                });
            }

            // === BACK TO TOP BUTTON ===
            const backToTopBtn = document.getElementById('back-to-top');
            if (backToTopBtn) {
                // Show/hide button on scroll
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 300) {
                        backToTopBtn.classList.remove('opacity-0', 'invisible');
                        backToTopBtn.classList.add('opacity-100', 'visible');
                    } else {
                        backToTopBtn.classList.add('opacity-0', 'invisible');
                        backToTopBtn.classList.remove('opacity-100', 'visible');
                    }
                });

                // Scroll to top on click
                backToTopBtn.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            }

            // === SMOOTH SCROLL FOR ANCHOR LINKS ===
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');
                    if (href !== '#' && href !== '#!') {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            target.scrollIntoView({
                                behavior: 'smooth',
                                block: 'start'
                            });

                            // Close mobile menu if open
                            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                                mobileMenu.classList.add('hidden');
                            }
                        }
                    }
                });
            });

            // === LAZY LOADING IMAGES ===
            if ('loading' in HTMLImageElement.prototype) {
                const images = document.querySelectorAll('img[loading="lazy"]');
                images.forEach(img => {
                    img.src = img.dataset.src || img.src;
                });
            } else {
                // Fallback for browsers that don't support lazy loading
                const script = document.createElement('script');
                script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
                document.body.appendChild(script);
            }

            console.log('✅ All core features initialized');
        });
    </script>

    {{-- Page-specific Scripts --}}
    @stack('scripts')

    {{-- Google Analytics (Optional) --}}
    @if(config('services.google.analytics_id'))
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', '{{ config('
            services.google.analytics_id ') }}');
    </script>
    @endif
</body>

</html>