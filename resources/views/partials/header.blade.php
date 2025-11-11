<header id="header" class="fixed top-0 left-0 w-full z-50 transition-all duration-500">
    <div class="absolute inset-0 bg-white/80 backdrop-blur-md border-b border-slate-200/50 shadow-sm"></div>

    <div class="container mx-auto px-6 relative">
        <div class="flex justify-between items-center h-20">

            <a href="{{ url('/') }}" class="text-3xl font-bold text-black hover:text-gray-800 transition-all duration-300">
                LynlyDesign
            </a>


            <nav class="hidden md:flex items-center space-x-1" aria-label="Main Navigation">
                <a href="{{ route('home') }}" class="nav-link group relative px-4 py-2 text-slate-700 font-medium text-lg transition-all duration-300">
                    <span class="relative z-10 group-hover:text-black-600">Trang chủ</span>
                    <div class="absolute inset-0 bg-pink-50 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-purple-600 group-hover:w-1/2 transition-all duration-300"></div>
                </a>
                <a href="{{ route('about') }}" class="nav-link group relative px-4 py-2 text-slate-700 font-medium text-lg transition-all duration-300">
                    <span class="relative z-10 group-hover:text-black-600">Giới thiệu</span>
                    <div class="absolute inset-0 bg-pink-50 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-purple-600 group-hover:w-1/2 transition-all duration-300"></div>
                </a>
                <a href="{{ route('collections.page') }}" class="nav-link group relative px-4 py-2 text-slate-700 font-medium text-lg transition-all duration-300">
                    <span class="relative z-10 group-hover:text-black-600">Váy đầm</span>
                    <div class="absolute inset-0 bg-pink-50 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-purple-600 group-hover:w-1/2 transition-all duration-300"></div>
                </a>
                <a href="{{ route('hottrend.page') }}" class="nav-link group relative px-4 py-2 text-slate-700 font-medium text-lg transition-all duration-300">
                    <span class="relative z-10 group-hover:text-black-600">Hot Trend</span>
                    <div class="absolute inset-0 bg-pink-50 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                    <span class="absolute -top-1 -right-1 px-1.5 py-0.5 text-[10px] font-bold text-white bg-gradient-to-r from-orange-500 to-red-500 rounded-full animate-pulse">HOT</span>
                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-purple-600 group-hover:w-1/2 transition-all duration-300"></div>
                </a>
                <a href="{{ route('contact.page') }}" class="nav-link group relative px-4 py-2 text-slate-700 font-medium text-lg transition-all duration-300">
                    <span class="relative z-10 group-hover:text-black-600">Liên hệ</span>
                    <div class="absolute inset-0 bg-pink-50 rounded-lg scale-0 group-hover:scale-100 transition-transform duration-300"></div>
                    <div class="absolute -bottom-1 left-1/2 -translate-x-1/2 w-0 h-0.5 bg-gradient-to-r from-pink-600 to-purple-600 group-hover:w-1/2 transition-all duration-300"></div>
                </a>
            </nav>

            <div class="flex items-center space-x-4">
                <a href="https://zalo.me/0769223338" target="_blank"
                    class="hidden md:inline-flex items-center gap-2 bg-white text-black font-semibold py-2.5 px-6 rounded-full border border-gray-300 hover:bg-gray-100 transition-all duration-300 shadow hover:-translate-y-0.5 group">
                    <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                    </svg>
                    <span>Tư vấn Zalo</span>
                </a>

                <button id="hamburger-button" class="md:hidden group relative p-2 focus:outline-none">
                    <div class="flex flex-col justify-between w-6 h-5 transform transition-all duration-300 origin-center overflow-hidden">
                        <span class="bg-black h-0.5 w-7 transform transition-all duration-300 origin-left group-[.active]:rotate-45 group-[.active]:translate-x-[3px] group-[.active]:translate-y-[-1px]"></span>
                        <span class="bg-black h-0.5 w-7 rounded transform transition-all duration-300 group-[.active]:opacity-0 group-[.active]:translate-x-3"></span>
                        <span class="bg-black h-0.5 w-7 transform transition-all duration-300 origin-left group-[.active]:-rotate-45 group-[.active]:translate-x-[3px] group-[.active]:translate-y-[1px]"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden fixed inset-x-0 top-20 bg-white/95 backdrop-blur-lg border-b border-slate-200 shadow-2xl transform -translate-y-[110%] opacity-0 transition-all duration-500 ease-out max-h-[calc(100vh-5rem)] overflow-y-auto">
    <nav class="container mx-auto px-6 py-6 space-y-2" aria-label="Mobile Navigation">
        <a href="{{ route('home') }}" class="mobile-nav-link flex items-center justify-between px-4 py-3 text-black font-medium text-lg rounded-xl hover:bg-gray-100 transition-all duration-300">
            Trang chủ
        </a>
        <a href="{{ route('about') }}" class="mobile-nav-link flex items-center justify-between px-4 py-3 text-black font-medium text-lg rounded-xl hover:bg-gray-100 transition-all duration-300">
            Giới thiệu
        </a>
        <a href="{{ route('collections.page') }}" class="mobile-nav-link flex items-center justify-between px-4 py-3 text-black font-medium text-lg rounded-xl hover:bg-gray-100 transition-all duration-300">
            Váy đầm
        </a>
        <a href="{{ route('hottrend.page') }}" class="mobile-nav-link flex items-center justify-between px-4 py-3 text-black font-medium text-lg rounded-xl hover:bg-gray-100 transition-all duration-300">
            Hot Trend
        </a>
        <a href="{{ route('contact.page') }}" class="mobile-nav-link flex items-center justify-between px-4 py-3 text-black font-medium text-lg rounded-xl hover:bg-gray-100 transition-all duration-300">
            Liên hệ
        </a>
        <div class="pt-4 mt-4 border-t border-slate-200">
            <a href="https://zalo.me/0769223338" target="_blank" class="flex items-center justify-center gap-2 w-full bg-black text-white font-semibold py-3 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                Tư vấn Zalo
            </a>
        </div>
    </nav>
</div>

</header>

@if(isset($scrollToSection) && $scrollToSection)
<script>
    window.scrollToSectionId = '{{ $scrollToSection }}';
</script>
@endif