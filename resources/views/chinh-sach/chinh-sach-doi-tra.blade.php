{{-- Kế thừa layout chính của trang web --}}
@extends('layouts.app')

{{-- Đặt tiêu đề cho trang --}}
@section('title', 'Chính Sách Đổi Trả - Lynlydesign Fashion')

{{-- Bắt đầu phần nội dung chính của trang --}}
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl mb-6 shadow-lg">
                <i class="fas fa-sync-alt text-white text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
                Chính Sách Đổi Trả
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed">
                Chúng tôi cam kết mang đến trải nghiệm mua sắm an tâm với chính sách đổi trả linh hoạt
            </p>
            <div class="mt-8 inline-flex items-center gap-2 px-6 py-3 bg-blue-100 text-blue-700 rounded-full font-semibold">
                <i class="fas fa-calendar-check"></i>
                <span>Đổi trả trong vòng 07 ngày</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            
            <!-- Quick Links -->
            <div class="flex flex-wrap gap-3 mb-12 pb-8 border-b border-slate-200">
                <a href="#section-1" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors">
                    Điều kiện đổi trả
                </a>
                <a href="#section-2" class="px-4 py-2 bg-indigo-100 text-indigo-700 rounded-full text-sm font-medium hover:bg-indigo-200 transition-colors">
                    Quy trình đổi trả
                </a>
                <a href="#section-3" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-200 transition-colors">
                    Chi phí
                </a>
                <a href="#section-4" class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full text-sm font-medium hover:bg-pink-200 transition-colors">
                    Trường hợp không đổi trả
                </a>
            </div>

            <!-- Section 1: Điều kiện đổi trả -->
            <div id="section-1" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">1</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Điều kiện đổi trả hàng</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        Chúng tôi hỗ trợ đổi trả sản phẩm trong vòng <strong class="text-blue-600">07 ngày</strong> kể từ ngày nhận hàng với các điều kiện sau:
                    </p>

                    <!-- Conditions Grid -->
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl border border-green-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-green-900 mb-1">Sản phẩm còn nguyên vẹn</h4>
                                <p class="text-sm text-green-700">Còn nguyên tem, mác, chưa qua sử dụng, giặt ủi</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl border border-green-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-tools text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-green-900 mb-1">Lỗi nhà sản xuất</h4>
                                <p class="text-sm text-green-700">Lỗi chỉ, rách, phai màu, lỗi kỹ thuật</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl border border-green-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-exchange-alt text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-green-900 mb-1">Giao sai sản phẩm</h4>
                                <p class="text-sm text-green-700">Không đúng size, kiểu dáng so với đơn hàng</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-green-50 rounded-xl border border-green-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-equals text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-green-900 mb-1">Giá trị tương đương</h4>
                                <p class="text-sm text-green-700">Sản phẩm đổi có giá bằng hoặc cao hơn</p>
                            </div>
                        </div>
                    </div>

                    <!-- Warning Note -->
                    <div class="bg-amber-50 border-l-4 border-amber-500 p-5 rounded-r-xl shadow-sm">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0">
                                <i class="fas fa-exclamation-triangle text-amber-600 text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-amber-900 mb-2">Lưu ý quan trọng</h4>
                                <p class="text-amber-800 text-sm leading-relaxed">
                                    Chúng tôi không áp dụng đổi trả đối với các sản phẩm trong chương trình <strong>khuyến mãi, giảm giá đặc biệt</strong> hoặc sản phẩm được may đo theo yêu cầu riêng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Quy trình đổi trả -->
            <div id="section-2" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">2</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Quy trình đổi trả</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <!-- Process Steps -->
                    <div class="space-y-6">
                        <!-- Step 1 -->
                        <div class="relative pl-8 pb-8 border-l-2 border-indigo-200">
                            <div class="absolute -left-4 top-0 w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-sm">1</span>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-6 border border-indigo-100">
                                <h3 class="font-bold text-indigo-900 mb-3 flex items-center gap-2">
                                    <i class="fas fa-phone-alt"></i>
                                    Liên hệ thông báo
                                </h3>
                                <p class="text-indigo-800 mb-4">
                                    Liên hệ với chúng tôi để thông báo về yêu cầu đổi trả qua:
                                </p>
                                <div class="flex flex-col gap-3">
                                    <a href="tel:0769223338" class="inline-flex items-center gap-3 text-indigo-700 hover:text-indigo-900 font-medium">
                                        <i class="fas fa-mobile-alt w-5"></i>
                                        <span>Hotline: 0769.223.338</span>
                                    </a>
                                    <a href="mailto:lynlydesign2022@gmail.com" class="inline-flex items-center gap-3 text-indigo-700 hover:text-indigo-900 font-medium">
                                        <i class="fas fa-envelope w-5"></i>
                                        <span>Email: lynlydesign2022@gmail.com</span>
                                    </a>
                                    <a href="https://zalo.me/0769223338" target="_blank" class="inline-flex items-center gap-3 text-indigo-700 hover:text-indigo-900 font-medium">
                                        <i class="fas fa-comment-dots w-5"></i>
                                        <span>Zalo: 0769.223.338</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative pl-8 pb-8 border-l-2 border-indigo-200">
                            <div class="absolute -left-4 top-0 w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-sm">2</span>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                                <h3 class="font-bold text-purple-900 mb-3 flex items-center gap-2">
                                    <i class="fas fa-box"></i>
                                    Đóng gói và gửi hàng
                                </h3>
                                <p class="text-purple-800 mb-3">
                                    Sau khi xác nhận, vui lòng đóng gói sản phẩm cẩn thận và gửi về địa chỉ:
                                </p>
                                <div class="bg-white p-4 rounded-lg border border-purple-200">
                                    <div class="flex items-start gap-3">
                                        <i class="fas fa-map-marker-alt text-purple-600 mt-1"></i>
                                        <div>
                                            <p class="font-semibold text-purple-900">Lynlydesign Fashion</p>
                                            <p class="text-sm text-purple-700">96a ngõ 1194 đường Láng</p>
                                            <p class="text-sm text-purple-700">Đống Đa, Hà Nội</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative pl-8">
                            <div class="absolute -left-4 top-0 w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-500 rounded-full flex items-center justify-center shadow-lg">
                                <span class="text-white font-bold text-sm">3</span>
                            </div>
                            <div class="bg-green-50 rounded-xl p-6 border border-green-100">
                                <h3 class="font-bold text-green-900 mb-3 flex items-center gap-2">
                                    <i class="fas fa-check-circle"></i>
                                    Xác nhận và gửi lại
                                </h3>
                                <p class="text-green-800">
                                    Ngay khi nhận được sản phẩm, chúng tôi sẽ kiểm tra và tiến hành gửi lại sản phẩm mới cho bạn trong vòng <strong>2-3 ngày làm việc</strong>.
                                </p>
                                <div class="mt-4 flex items-center gap-2 text-green-700 text-sm">
                                    <i class="fas fa-info-circle"></i>
                                    <span>Bạn sẽ nhận được mã vận đơn để theo dõi</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Chi phí đổi trả -->
            <div id="section-3" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">3</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Chi phí đổi trả</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Free Case -->
                        <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-6 border-2 border-green-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-gift text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-green-900 text-lg">MIỄN PHÍ vận chuyển</h3>
                            </div>
                            <p class="text-green-800 mb-4">
                                Lynlydesign Fashion chịu toàn bộ chi phí vận chuyển trong các trường hợp:
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-green-700">
                                    <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                                    <span>Lỗi từ nhà sản xuất</span>
                                </li>
                                <li class="flex items-start gap-2 text-green-700">
                                    <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                                    <span>Giao sai sản phẩm</span>
                                </li>
                                <li class="flex items-start gap-2 text-green-700">
                                    <i class="fas fa-check-circle mt-1 flex-shrink-0"></i>
                                    <span>Sản phẩm bị hư hỏng khi vận chuyển</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Paid Case -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border-2 border-blue-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-credit-card text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-blue-900 text-lg">Khách hàng thanh toán</h3>
                            </div>
                            <p class="text-blue-800 mb-4">
                                Khách hàng vui lòng thanh toán chi phí vận chuyển 2 chiều khi:
                            </p>
                            <ul class="space-y-2">
                                <li class="flex items-start gap-2 text-blue-700">
                                    <i class="fas fa-arrow-right mt-1 flex-shrink-0"></i>
                                    <span>Đổi size theo yêu cầu</span>
                                </li>
                                <li class="flex items-start gap-2 text-blue-700">
                                    <i class="fas fa-arrow-right mt-1 flex-shrink-0"></i>
                                    <span>Đổi mẫu khác</span>
                                </li>
                                <li class="flex items-start gap-2 text-blue-700">
                                    <i class="fas fa-arrow-right mt-1 flex-shrink-0"></i>
                                    <span>Thay đổi ý muốn cá nhân</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Trường hợp không đổi trả -->
            <div id="section-4" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">4</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Trường hợp không áp dụng đổi trả</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-red-50 rounded-2xl p-6 border-2 border-red-200">
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-red-900 mb-1">Sản phẩm đã qua sử dụng</h4>
                                    <p class="text-sm text-red-700">Đã giặt, ủi, cắt mác, hoặc có dấu hiệu sử dụng</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-red-900 mb-1">Quá thời hạn đổi trả</h4>
                                    <p class="text-sm text-red-700">Sau 07 ngày kể từ ngày nhận hàng</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-red-900 mb-1">Sản phẩm khuyến mãi</h4>
                                    <p class="text-sm text-red-700">Sản phẩm trong chương trình sale, giảm giá đặc biệt</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-red-900 mb-1">Sản phẩm may đo</h4>
                                    <p class="text-sm text-red-700">Sản phẩm được may đo theo yêu cầu riêng của khách hàng</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-red-900 mb-1">Không có chứng từ</h4>
                                    <p class="text-sm text-red-700">Không có hóa đơn, phiếu giao hàng hoặc bằng chứng mua hàng</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 bg-gradient-to-br from-blue-500 via-indigo-500 to-purple-500 rounded-2xl p-8 text-center text-white shadow-2xl">
                <i class="fas fa-headset text-5xl mb-4 opacity-90"></i>
                <h3 class="text-2xl font-bold mb-3">Cần hỗ trợ về đổi trả?</h3>
                <p class="mb-6 opacity-90">Liên hệ ngay với chúng tôi để được tư vấn chi tiết</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://zalo.me/0769223338" target="_blank" class="inline-flex items-center justify-center gap-2 bg-white text-indigo-600 font-semibold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all">
                        <i class="fas fa-comments"></i>
                        Chat qua Zalo
                    </a>
                    <a href="tel:0769223338" class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur text-white font-semibold py-3 px-6 rounded-lg hover:bg-white/30 transition-all border border-white/30">
                        <i class="fas fa-phone-alt"></i>
                        Gọi ngay: 0769.223.338
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Tips Section -->
<section class="py-16 bg-gradient-to-b from-slate-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">
                    <i class="fas fa-lightbulb text-yellow-500 mr-2"></i>
                    Mẹo để đổi trả thuận lợi
                </h3>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-camera text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Chụp ảnh khi nhận hàng</h4>
                    <p class="text-sm text-slate-600">Ghi lại tình trạng sản phẩm ngay khi nhận</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-receipt text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Giữ hóa đơn</h4>
                    <p class="text-sm text-slate-600">Lưu phiếu giao hàng và hóa đơn mua hàng</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-tag text-purple-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Không cắt mác</h4>
                    <p class="text-sm text-slate-600">Giữ nguyên tem mác cho đến khi chắc chắn</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.scroll-mt-24 {
    scroll-margin-top: 6rem;
}

html {
    scroll-behavior: smooth;
}
</style>

@endsection