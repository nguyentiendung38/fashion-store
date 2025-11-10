<footer class="relative bg-white border-t border-slate-200/60 overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0 opacity-10 pointer-events-none">
        <div class="absolute top-0 left-0 w-80 h-80 bg-gray-200 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-80 h-80 bg-gray-200 rounded-full blur-3xl"></div>
    </div>

    <div class="relative z-10 container mx-auto px-6 lg:px-10">
        <!-- Footer grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-10 py-14">

            <!-- Logo + intro -->
            <div class="space-y-5 text-center md:text-left">
                <a href="{{ url('/') }}" class="inline-block">
                    <span class="text-4xl lg:text-5xl font-bold text-black hover:text-gray-700 transition-colors">
                        Lynlydesign
                    </span>
                </a>
                <p class="text-slate-700 leading-relaxed text-base mx-auto md:mx-0 max-w-sm">
                    Tôn vinh vẻ đẹp tự nhiên và phong cách riêng của người phụ nữ hiện đại.
                    Thời trang thanh lịch – tinh tế – đẳng cấp.
                </p>

                <!-- Social icons -->
                <div class="flex space-x-3 pt-3 justify-center md:justify-start">
                    <a href="#" aria-label="Facebook" class="p-3 bg-slate-100 rounded-xl text-black hover:text-gray-600 hover:bg-slate-200 transition-all duration-300">
                        <i class="fa-brands fa-facebook-f text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/lynlydesign" target="_blank" aria-label="Instagram" class="p-3 bg-slate-100 rounded-xl text-black hover:text-gray-600 hover:bg-slate-200 transition-all duration-300">
                        <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                    <a href="https://zalo.me/0769223338" target="_blank" aria-label="Zalo" class="p-3 bg-slate-100 rounded-xl text-black hover:text-gray-600 hover:bg-slate-200 transition-all duration-300">
                        <i class="fa-solid fa-comment text-xl"></i>
                    </a>
                    <a href="#" aria-label="Tiktok" class="p-3 bg-slate-100 rounded-xl text-black hover:text-gray-600 hover:bg-slate-200 transition-all duration-300">
                        <i class="fa-brands fa-tiktok text-xl"></i>
                    </a>
                </div>
            </div>

            <!-- Quick links -->
            <div class="text-center md:text-left">
                <h4 class="font-semibold text-slate-900 mb-4 uppercase text-lg tracking-wider">Về chúng tôi</h4>
                <ul class="space-y-3 text-base">
                    <li><a href="{{ route('about') }}" class="text-slate-700 hover:text-black transition-colors">Giới thiệu</a></li>
                    <li><a href="{{ route('collections.page') }}" class="text-slate-700 hover:text-black transition-colors">Bộ sưu tập</a></li>
                    <li><a href="{{ route('hottrend.page') }}" class="text-slate-700 hover:text-black transition-colors">Hot Trend</a></li>
                    <li><a href="{{ route('contact.page') }}" class="text-slate-700 hover:text-black transition-colors">Liên hệ</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="text-center md:text-left">
                <h4 class="font-semibold text-slate-900 mb-4 uppercase text-lg tracking-wider">Liên hệ</h4>
                <ul class="space-y-4 text-base text-slate-700">
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="fa-solid fa-phone text-black mr-2"></i>
                        <a href="tel:0769223338" class="hover:text-black transition">0769 223 338</a>
                    </li>
                    <li class="flex items-center justify-center md:justify-start">
                        <i class="fa-solid fa-envelope text-black mr-2"></i>
                        <a href="mailto:lynlydesign2022@gmail.com" class="hover:text-black transition break-all">lynlydesign2022@gmail.com</a>
                    </li>
                    <li class="flex items-start justify-center md:justify-start">
                        <i class="fa-solid fa-location-dot text-black mr-2 mt-1"></i>
                        <span class="text-left">96a Ngõ 1194 Đường Láng, Đống Đa, Hà Nội</span>
                    </li>
                </ul>
            </div>

            <!-- Payment & scroll top -->
            <div class="flex flex-col items-center md:items-start lg:items-end justify-between space-y-6">
                <div class="space-y-3 text-center lg:text-right">
                    <span class="text-base text-slate-600 block">Phương thức thanh toán</span>
                    <div class="flex gap-4 text-black justify-center lg:justify-end">
                        <i class="fa-brands fa-cc-visa text-4xl"></i>
                        <i class="fa-brands fa-cc-mastercard text-4xl"></i>
                        <i class="fa-brands fa-cc-jcb text-4xl"></i>
                        <img src="https://upload.wikimedia.org/wikipedia/vi/f/fe/MoMo_Logo.png" alt="Momo" class="w-12 h-7 object-contain grayscale">
                    </div>
                </div>

                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                    class="flex items-center gap-2 px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-black rounded-full transition-all duration-300 text-base">
                    <span class="font-medium">Về đầu trang</span>
                    <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-slate-200 py-6 text-center text-base text-slate-700">
            © {{ date('Y') }} <span class="font-semibold text-black">Lynlydesign</span>. All Rights Reserved.
            <span class="block text-sm text-slate-500 mt-1">Made with ❤️ in Vietnam</span>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 h-1 bg-black"></div>
</footer>