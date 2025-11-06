{{-- Kế thừa layout chính của trang web --}}
@extends('layouts.app')

{{-- Đặt tiêu đề cho trang --}}
@section('title', 'Vận Chuyển & Giao Hàng - Lynlydesign Fashion')

{{-- Bắt đầu phần nội dung chính của trang --}}
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-cyan-50 via-white to-blue-50 py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-2xl mb-6 shadow-lg">
                <i class="fas fa-shipping-fast text-white text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
                Vận Chuyển & Giao Hàng
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed">
                Giao hàng nhanh chóng, an toàn đến tay bạn trên toàn quốc
            </p>
            <div class="mt-8 inline-flex items-center gap-2 px-6 py-3 bg-cyan-100 text-cyan-700 rounded-full font-semibold">
                <i class="fas fa-truck"></i>
                <span>Miễn phí ship đơn từ 500K</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            
            <!-- Quick Navigation -->
            <div class="flex flex-wrap gap-3 mb-12 pb-8 border-b border-slate-200 justify-center">
                <a href="#shipping-fee" class="px-4 py-2 bg-cyan-100 text-cyan-700 rounded-full text-sm font-medium hover:bg-cyan-200 transition-colors">
                    <i class="fas fa-coins mr-1"></i> Phí vận chuyển
                </a>
                <a href="#delivery-time" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors">
                    <i class="fas fa-clock mr-1"></i> Thời gian giao hàng
                </a>
                <a href="#tracking" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-200 transition-colors">
                    <i class="fas fa-map-marked-alt mr-1"></i> Theo dõi đơn
                </a>
                <a href="#partners" class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium hover:bg-green-200 transition-colors">
                    <i class="fas fa-handshake mr-1"></i> Đối tác
                </a>
            </div>

            <!-- Section 1: Phí vận chuyển -->
            <div id="shipping-fee" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">1</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Phí vận chuyển</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-cyan-500 to-blue-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        Phí vận chuyển được tính tự động dựa trên địa chỉ nhận hàng của quý khách và sẽ được hiển thị rõ ràng ở bước thanh toán.
                    </p>

                    <!-- Shipping Fee Cards -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <!-- Nội thành -->
                        <div class="bg-gradient-to-br from-cyan-50 to-blue-50 rounded-2xl p-6 border-2 border-cyan-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-cyan-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-city text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-cyan-900 text-lg">Nội thành Hà Nội</h3>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-cyan-200">
                                    <span class="text-cyan-800">Phí ship</span>
                                    <span class="font-bold text-cyan-900 text-lg">20.000đ</span>
                                </div>
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-cyan-800">Thời gian</span>
                                    <span class="font-semibold text-cyan-900">1-2 ngày</span>
                                </div>
                            </div>
                        </div>

                        <!-- Tỉnh thành khác -->
                        <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6 border-2 border-blue-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-map-marked-alt text-white text-xl"></i>
                                </div>
                                <h3 class="font-bold text-blue-900 text-lg">Các tỉnh thành khác</h3>
                            </div>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center py-2 border-b border-blue-200">
                                    <span class="text-blue-800">Phí ship</span>
                                    <span class="font-bold text-blue-900 text-lg">30.000 - 35.000đ</span>
                                </div>
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-blue-800">Thời gian</span>
                                    <span class="font-semibold text-blue-900">3-5 ngày</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Free Shipping Banner -->
                    <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl p-6 text-white shadow-lg">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-16 h-16 bg-white/20 rounded-full flex items-center justify-center">
                                <i class="fas fa-gift text-3xl"></i>
                            </div>
                            <div class="flex-1">
                                <h4 class="font-bold text-xl mb-2">🎉 MIỄN PHÍ VẬN CHUYỂN</h4>
                                <p class="text-green-50">
                                    Áp dụng cho tất cả đơn hàng có giá trị từ <strong class="text-white text-lg">500.000đ</strong> trở lên trên toàn quốc
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Thời gian giao hàng -->
            <div id="delivery-time" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">2</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Thời gian giao hàng</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-blue-50 rounded-2xl p-6 border-2 border-blue-200 mb-6">
                        <p class="text-blue-900 leading-relaxed">
                            Sau khi đơn hàng được xác nhận, chúng tôi sẽ tiến hành đóng gói cẩn thận và giao cho đơn vị vận chuyển trong vòng <strong>24 giờ</strong>.
                        </p>
                    </div>

                    <!-- Timeline -->
                    <div class="relative">
                        <!-- Timeline Line -->
                        <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-gradient-to-b from-blue-500 to-indigo-500"></div>

                        <!-- Step 1 -->
                        <div class="relative pl-16 pb-10">
                            <div class="absolute left-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-md border border-blue-100">
                                <h4 class="font-bold text-blue-900 mb-2">Xác nhận đơn hàng</h4>
                                <p class="text-slate-600 text-sm">Nhận thông báo xác nhận qua email/SMS ngay sau khi đặt hàng</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-semibold">Ngay lập tức</span>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="relative pl-16 pb-10">
                            <div class="absolute left-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-box text-white"></i>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-md border border-purple-100">
                                <h4 class="font-bold text-purple-900 mb-2">Đóng gói & xuất kho</h4>
                                <p class="text-slate-600 text-sm">Sản phẩm được đóng gói cẩn thận và chuyển cho đơn vị vận chuyển</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-semibold">Trong 24 giờ</span>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="relative pl-16 pb-10">
                            <div class="absolute left-0 w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-truck text-white"></i>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-md border border-orange-100">
                                <h4 class="font-bold text-orange-900 mb-2">Đang vận chuyển</h4>
                                <p class="text-slate-600 text-sm mb-3">Đơn hàng đang trên đường đến tay bạn</p>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="bg-orange-50 p-3 rounded-lg">
                                        <p class="text-xs text-orange-700 mb-1">Nội thành HN</p>
                                        <p class="font-bold text-orange-900">1-2 ngày</p>
                                    </div>
                                    <div class="bg-red-50 p-3 rounded-lg">
                                        <p class="text-xs text-red-700 mb-1">Tỉnh thành khác</p>
                                        <p class="font-bold text-red-900">3-5 ngày</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="relative pl-16">
                            <div class="absolute left-0 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-full flex items-center justify-center shadow-lg">
                                <i class="fas fa-home text-white"></i>
                            </div>
                            <div class="bg-white rounded-xl p-6 shadow-md border border-green-100">
                                <h4 class="font-bold text-green-900 mb-2">Giao hàng thành công</h4>
                                <p class="text-slate-600 text-sm">Nhận hàng và kiểm tra sản phẩm trước khi thanh toán (COD)</p>
                                <span class="inline-block mt-2 px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Hoàn tất</span>
                            </div>
                        </div>
                    </div>

                    <!-- Warning Note -->
                    <div class="mt-8 bg-amber-50 border-l-4 border-amber-500 p-5 rounded-r-xl">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-exclamation-triangle text-amber-600 text-xl mt-1"></i>
                            <div>
                                <h5 class="font-bold text-amber-900 mb-2">Lưu ý quan trọng</h5>
                                <p class="text-amber-800 text-sm leading-relaxed">
                                    Thời gian giao hàng có thể kéo dài hơn do các yếu tố khách quan như thời tiết xấu, tình hình dịch bệnh, hoặc quá tải đơn hàng trong các dịp lễ, Tết. Chúng tôi sẽ liên hệ và cập nhật cho bạn nếu có bất kỳ thay đổi nào.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Theo dõi đơn hàng -->
            <div id="tracking" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">3</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Theo dõi đơn hàng</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 border-2 border-purple-200 mb-6">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-16 h-16 bg-purple-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-search-location text-white text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-purple-900 mb-3 text-lg">Cách theo dõi đơn hàng</h4>
                                <p class="text-purple-800 leading-relaxed mb-4">
                                    Sau khi đơn hàng được chuyển đi, một <strong>mã vận đơn</strong> sẽ được gửi đến email và số điện thoại của bạn. Bạn có thể sử dụng mã này để theo dõi tình trạng đơn hàng trên website của đối tác vận chuyển.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tracking Steps -->
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="bg-white rounded-xl p-6 shadow-md border border-slate-200 text-center">
                            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-envelope-open-text text-blue-600 text-2xl"></i>
                            </div>
                            <h5 class="font-bold text-slate-900 mb-2">Bước 1</h5>
                            <p class="text-sm text-slate-600">Nhận mã vận đơn qua email/SMS</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md border border-slate-200 text-center">
                            <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-globe text-purple-600 text-2xl"></i>
                            </div>
                            <h5 class="font-bold text-slate-900 mb-2">Bước 2</h5>
                            <p class="text-sm text-slate-600">Truy cập website đơn vị vận chuyển</p>
                        </div>

                        <div class="bg-white rounded-xl p-6 shadow-md border border-slate-200 text-center">
                            <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-map-marker-alt text-green-600 text-2xl"></i>
                            </div>
                            <h5 class="font-bold text-slate-900 mb-2">Bước 3</h5>
                            <p class="text-sm text-slate-600">Nhập mã để xem vị trí đơn hàng</p>
                        </div>
                    </div>

                    <!-- Quick Tracking -->
                    <div class="mt-8 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-2xl p-8 text-white">
                        <h4 class="font-bold text-xl mb-4 text-center">Tra cứu đơn hàng nhanh</h4>
                        <div class="flex flex-col sm:flex-row gap-3 max-w-xl mx-auto">
                            <input type="text" placeholder="Nhập mã vận đơn của bạn..." class="flex-1 px-5 py-3 rounded-lg text-slate-900 focus:ring-2 focus:ring-white focus:outline-none">
                            <button class="bg-white text-indigo-600 font-bold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all">
                                <i class="fas fa-search mr-2"></i>Tra cứu
                            </button>
                        </div>
                        <p class="text-center text-sm mt-4 opacity-90">
                            Hoặc liên hệ <a href="tel:0769223338" class="underline font-semibold">0769.223.338</a> để được hỗ trợ
                        </p>
                    </div>
                </div>
            </div>

            <!-- Section 4: Đối tác vận chuyển -->
            <div id="partners" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">4</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Đối tác vận chuyển</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <p class="text-slate-700 leading-relaxed mb-8">
                        Chúng tôi hợp tác với các đơn vị vận chuyển uy tín hàng đầu Việt Nam để đảm bảo đơn hàng của bạn được giao nhanh chóng và an toàn.
                    </p>

                    <div class="grid md:grid-cols-3 gap-6">
                        <!-- Partner 1 -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border-2 border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="aspect-video bg-gradient-to-br from-red-100 to-orange-100 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-shipping-fast text-4xl text-red-600"></i>
                            </div>
                            <h5 class="font-bold text-slate-900 mb-2 text-center">Giao Hàng Nhanh</h5>
                            <p class="text-sm text-slate-600 text-center">Nhanh chóng, an toàn, uy tín</p>
                        </div>

                        <!-- Partner 2 -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border-2 border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="aspect-video bg-gradient-to-br from-green-100 to-emerald-100 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-box text-4xl text-green-600"></i>
                            </div>
                            <h5 class="font-bold text-slate-900 mb-2 text-center">Giao Hàng Tiết Kiệm</h5>
                            <p class="text-sm text-slate-600 text-center">Tiết kiệm, phủ sóng rộng</p>
                        </div>

                        <!-- Partner 3 -->
                        <div class="bg-white rounded-xl p-6 shadow-lg border-2 border-slate-200 hover:shadow-xl transition-shadow">
                            <div class="aspect-video bg-gradient-to-br from-blue-100 to-cyan-100 rounded-lg flex items-center justify-center mb-4">
                                <i class="fas fa-truck text-4xl text-blue-600"></i>
                            </div>
                            <h5 class="font-bold text-slate-900 mb-2 text-center">Viettel Post</h5>
                            <p class="text-sm text-slate-600 text-center">Chuyên nghiệp, đáng tin cậy</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Chính sách kiểm hàng -->
            <div class="mb-16">
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 border-2 border-indigo-200">
                    <h3 class="font-bold text-indigo-900 mb-4 text-xl flex items-center gap-2">
                        <i class="fas fa-box-open"></i>
                        Chính sách kiểm hàng trước khi thanh toán
                    </h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-indigo-900 mb-1">Được kiểm tra</h5>
                                <p class="text-sm text-indigo-700">Kiểm tra bên ngoài, số lượng sản phẩm, tem mác</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="flex-shrink-0 w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-times text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-red-900 mb-1">Không được phép</h5>
                                <p class="text-sm text-red-700">Mở bao bì, thử sản phẩm, cắt tem mác</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-gradient-to-br from-cyan-500 via-blue-500 to-indigo-600 rounded-2xl p-8 md:p-12 text-center text-white shadow-2xl">
                <i class="fas fa-comments text-6xl mb-6 opacity-90"></i>
                <h3 class="text-3xl font-bold mb-4">Cần hỗ trợ về giao hàng?</h3>
                <p class="text-lg mb-8 opacity-90 max-w-2xl mx-auto">
                    Đội ngũ chăm sóc khách hàng của chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://zalo.me/0769223338" target="_blank" class="inline-flex items-center justify-center gap-3 bg-white text-blue-600 font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transition-all shadow-lg">
                        <i class="fas fa-comments text-xl"></i>
                        <span>Chat qua Zalo</span>
                    </a>
                    <a href="tel:0769223338" class="inline-flex items-center justify-center gap-3 bg-white/20 backdrop-blur text-white font-bold py-4 px-8 rounded-xl hover:bg-white/30 transition-all border-2 border-white/50">
                        <i class="fas fa-phone-alt text-xl"></i>
                        <span>Gọi: 0769.223.338</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gradient-to-b from-slate-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">
                    <i class="fas fa-question-circle text-cyan-500 mr-2"></i>
                    Câu hỏi thường gặp
                </h3>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shipping-fast text-cyan-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Làm thế nào để theo dõi đơn hàng của tôi?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed">
                            Sau khi đơn hàng được chuyển đi, bạn sẽ nhận được mã vận đơn qua email hoặc SMS. Bạn có thể truy cập website của đơn vị vận chuyển (Giao Hàng Nhanh, Giao Hàng Tiết Kiệm hoặc Viettel Post) và nhập mã vận đơn để xem tình trạng giao hàng real-time.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-money-bill-wave text-blue-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Khi nào tôi sẽ được miễn phí vận chuyển?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed">
                            Miễn phí vận chuyển áp dụng cho tất cả các đơn hàng có giá trị từ 500.000đ trở lên trên toàn quốc, không cần nhập mã khuyến mãi. Điều kiện này áp dụng cho cả đơn thanh toán trước (online) và thanh toán sau (COD).
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-purple-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Thời gian giao hàng mất bao lâu?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed mb-3">
                            Thời gian giao hàng phụ thuộc vào địa chỉ nhận hàng:
                        </p>
                        <ul class="text-slate-700 space-y-2">
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span><strong>Nội thành Hà Nội:</strong> 1-2 ngày</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span><strong>Các tỉnh thành khác:</strong> 3-5 ngày</span>
                            </li>
                        </ul>
                        <p class="text-slate-600 text-sm mt-3">
                            Thời gian trên được tính từ khi đơn hàng được chuyển đi (không tính thời gian xác nhận và đóng gói).
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-undo text-green-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Làm thế nào để hoàn trả hoặc đổi hàng?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed mb-3">
                            Lynlydesign Fashion cung cấp chính sách hoàn trả/đổi hàng trong vòng 7 ngày kể từ khi nhận sản phẩm, với điều kiện:
                        </p>
                        <ul class="text-slate-700 space-y-2">
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span>Sản phẩm không bị sử dụng, giặt hoặc hư hỏng</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span>Còn nguyên tem mác, bao bì</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span>Liên hệ qua Zalo hoặc hotline để được hướng dẫn chi tiết</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-box-open text-orange-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Tôi có thể kiểm tra hàng trước khi thanh toán không?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed mb-3">
                            Có, bạn có thể kiểm tra hàng trước khi thanh toán với phương thức COD (Thanh toán khi nhận hàng). Bạn được phép:
                        </p>
                        <ul class="text-slate-700 space-y-2 mb-3">
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span>Kiểm tra bao bì bên ngoài</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-green-500 text-sm"></i>
                                <span>Kiểm tra số lượng và tem mác</span>
                            </li>
                        </ul>
                        <p class="text-red-600 text-sm font-semibold">
                            Lưu ý: Không được mở bao bì, thử sản phẩm hoặc cắt tem mác
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-exclamation-circle text-red-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Điều gì xảy ra nếu hàng bị hư hỏng khi giao?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed mb-3">
                            Nếu hàng bị hư hỏng khi giao, vui lòng:
                        </p>
                        <ol class="text-slate-700 space-y-2 list-decimal list-inside">
                            <li>Từ chối nhận hoặc không thanh toán (nếu dùng COD)</li>
                            <li>Chụp ảnh/video chứng minh tình trạng hàng</li>
                            <li>Liên hệ ngay cho chúng tôi qua Zalo hoặc hotline 0769.223.338</li>
                            <li>Chúng tôi sẽ hỗ trợ hoàn tiền hoặc gửi hàng mới ngay lập tức</li>
                        </ol>
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="faq-item bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <button class="faq-button w-full px-6 py-4 text-left flex items-center justify-between hover:bg-slate-50 transition-colors">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-pin text-indigo-600"></i>
                            </div>
                            <span class="font-semibold text-slate-900">Bạn có giao hàng đến các tỉnh xa không?</span>
                        </div>
                        <i class="fas fa-chevron-down text-slate-400 transition-transform"></i>
                    </button>
                    <div class="faq-content hidden px-6 pb-4 bg-slate-50 border-t border-slate-200">
                        <p class="text-slate-700 leading-relaxed">
                            Có, chúng tôi giao hàng đến hầu hết các tỉnh thành trên toàn quốc thông qua các đối tác vận chuyển uy tín như Giao Hàng Nhanh, Giao Hàng Tiết Kiệm và Viettel Post. Phí vận chuyển sẽ được hiển thị tự động khi bạn nhập địa chỉ giao hàng tại bước thanh toán.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Footer Note -->
<section class="py-12 bg-white border-t border-slate-200">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-slate-600 leading-relaxed">
                <i class="fas fa-info-circle text-cyan-500 mr-2"></i>
                Nếu bạn không tìm thấy câu trả lời cho câu hỏi của mình, vui lòng liên hệ với đội hỗ trợ khách hàng của chúng tôi qua 
                <a href="https://zalo.me/0769223338" target="_blank" class="text-cyan-600 font-semibold hover:underline">Zalo</a>,
                <a href="tel:0769223338" class="text-cyan-600 font-semibold hover:underline">hotline 0769.223.338</a>
                hoặc email. Chúng tôi luôn sẵn sàng giúp đỡ!
            </p>
        </div>
    </div>
</section>

<script>
    // FAQ Accordion Functionality
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', function() {
            const faqItem = this.parentElement;
            const content = faqItem.querySelector('.faq-content');
            const icon = this.querySelector('.fa-chevron-down');
            
            // Close other open FAQs
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    item.querySelector('.faq-content').classList.add('hidden');
                    item.querySelector('.fa-chevron-down').style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current FAQ
            content.classList.toggle('hidden');
            icon.style.transform = content.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
</script>