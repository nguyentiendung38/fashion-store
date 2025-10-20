{{-- Kế thừa layout chính của trang web --}}
@extends('layouts.app')

{{-- Đặt tiêu đề cho trang --}}
@section('title', 'Chính Sách Bảo Mật - LadyFashion')

{{-- Bắt đầu phần nội dung chính của trang --}}
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-pink-50 via-white to-purple-50 py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-pink-500 to-purple-600 rounded-2xl mb-6 shadow-lg">
                <i class="fas fa-shield-alt text-white text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
                Chính Sách Bảo Mật
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed">
                Chúng tôi cam kết bảo vệ thông tin cá nhân của bạn với các tiêu chuẩn bảo mật cao nhất
            </p>
            <div class="mt-8 flex items-center justify-center gap-2 text-sm text-slate-500">
                <i class="far fa-clock"></i>
                <span>Cập nhật lần cuối: 10 tháng 10 năm 2025</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            
            <!-- Navigation Pills -->
            <div class="flex flex-wrap gap-3 mb-12 pb-8 border-b border-slate-200">
                <a href="#section-1" class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full text-sm font-medium hover:bg-pink-200 transition-colors">
                    Thu thập thông tin
                </a>
                <a href="#section-2" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-200 transition-colors">
                    Sử dụng thông tin
                </a>
                <a href="#section-3" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors">
                    Lưu trữ
                </a>
                <a href="#section-4" class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium hover:bg-green-200 transition-colors">
                    Cam kết bảo mật
                </a>
            </div>

            <!-- Section 1 -->
            <div id="section-1" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-pink-500 to-rose-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">1</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Mục đích và phạm vi thu thập thông tin</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="prose prose-slate max-w-none">
                        <p class="text-slate-600 leading-relaxed mb-4">
                            Chúng tôi thu thập thông tin cá nhân của khách hàng (như họ tên, địa chỉ email, số điện thoại, địa chỉ giao hàng) nhằm mục đích xử lý đơn hàng, giao hàng và hỗ trợ khách hàng.
                        </p>
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded-r-lg my-6">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-exclamation-triangle text-amber-600 mt-1"></i>
                                <p class="text-amber-800 text-sm">
                                    <strong>Lưu ý:</strong> Mọi thông tin khai báo phải đảm bảo tính chính xác và hợp pháp. LadyFashion không chịu mọi trách nhiệm liên quan đến pháp luật của thông tin khai báo sai lệch.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2 -->
            <div id="section-2" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-indigo-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">2</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Phạm vi sử dụng thông tin</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-purple-500 to-indigo-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <p class="text-slate-600 leading-relaxed mb-6">
                        Thông tin cá nhân thu thập được sẽ chỉ được sử dụng trong nội bộ công ty cho các mục đích sau:
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-headset text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Hỗ trợ khách hàng</h4>
                                <p class="text-sm text-slate-600">Giải đáp thắc mắc và xử lý yêu cầu của bạn</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-bell text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Cung cấp thông tin</h4>
                                <p class="text-sm text-slate-600">Thông báo về sản phẩm mới, khuyến mãi và dịch vụ</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shopping-cart text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Xử lý đơn hàng</h4>
                                <p class="text-sm text-slate-600">Quản lý và thực hiện các đơn đặt hàng của bạn</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 p-4 bg-orange-50 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex-shrink-0 w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-shipping-fast text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-900 mb-1">Giao hàng</h4>
                                <p class="text-sm text-slate-600">Chia sẻ thông tin cần thiết với đơn vị vận chuyển</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div id="section-3" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">3</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Thời gian lưu trữ thông tin</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6 border border-blue-100">
                        <p class="text-slate-700 leading-relaxed mb-4">
                            Dữ liệu cá nhân của khách hàng sẽ được lưu trữ cho đến khi có yêu cầu hủy bỏ từ khách hàng.
                        </p>
                        <p class="text-slate-700 leading-relaxed">
                            Trong mọi trường hợp khác, thông tin cá nhân của khách hàng sẽ được bảo mật trên máy chủ của chúng tôi với các biện pháp bảo vệ cao cấp.
                        </p>
                        <div class="mt-6 pt-6 border-t border-blue-200">
                            <div class="flex items-center gap-2 text-blue-700">
                                <i class="fas fa-info-circle"></i>
                                <p class="text-sm font-medium">
                                    Bạn có quyền yêu cầu xóa thông tin cá nhân bất cứ lúc nào
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div id="section-4" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">4</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Cam kết bảo mật thông tin</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-green-50 rounded-2xl p-6 border border-green-200 mb-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-lock text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-900 mb-2">Cam kết tuyệt đối</h4>
                                <p class="text-green-800 leading-relaxed">
                                    Chúng tôi cam kết không chia sẻ, bán hoặc cho thuê thông tin cá nhân của khách hàng cho bất kỳ bên thứ ba nào khác.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h3 class="font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="fas fa-shield-alt text-green-600"></i>
                        Biện pháp bảo mật
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="p-4 bg-white border border-slate-200 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-server text-green-600"></i>
                                <h5 class="font-semibold text-slate-900">Máy chủ bảo mật</h5>
                            </div>
                            <p class="text-sm text-slate-600">Hệ thống máy chủ được mã hóa và bảo vệ 24/7</p>
                        </div>
                        <div class="p-4 bg-white border border-slate-200 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-user-shield text-green-600"></i>
                                <h5 class="font-semibold text-slate-900">Quyền truy cập</h5>
                            </div>
                            <p class="text-sm text-slate-600">Chỉ nhân viên được ủy quyền mới truy cập dữ liệu</p>
                        </div>
                        <div class="p-4 bg-white border border-slate-200 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-key text-green-600"></i>
                                <h5 class="font-semibold text-slate-900">Mã hóa SSL</h5>
                            </div>
                            <p class="text-sm text-slate-600">Tất cả giao dịch được mã hóa SSL 256-bit</p>
                        </div>
                        <div class="p-4 bg-white border border-slate-200 rounded-xl hover:shadow-md transition-shadow">
                            <div class="flex items-center gap-3 mb-2">
                                <i class="fas fa-sync-alt text-green-600"></i>
                                <h5 class="font-semibold text-slate-900">Sao lưu định kỳ</h5>
                            </div>
                            <p class="text-sm text-slate-600">Dữ liệu được sao lưu thường xuyên và an toàn</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 bg-gradient-to-br from-pink-500 via-purple-500 to-indigo-500 rounded-2xl p-8 text-center text-white shadow-2xl">
                <i class="fas fa-comments text-5xl mb-4 opacity-90"></i>
                <h3 class="text-2xl font-bold mb-3">Có câu hỏi về chính sách bảo mật?</h3>
                <p class="mb-6 opacity-90">Đội ngũ chúng tôi luôn sẵn sàng giải đáp mọi thắc mắc của bạn</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://zalo.me/0769223338" target="_blank" class="inline-flex items-center justify-center gap-2 bg-white text-purple-600 font-semibold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all">
                        <i class="fas fa-phone-alt"></i>
                        Liên hệ qua Zalo
                    </a>
                    <a href="mailto:lynlydesign2022@gmail.com" class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur text-white font-semibold py-3 px-6 rounded-lg hover:bg-white/30 transition-all border border-white/30">
                        <i class="fas fa-envelope"></i>
                        Gửi email
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Quick Facts Section -->
<section class="py-16 bg-slate-50">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <h3 class="text-2xl font-bold text-center text-slate-900 mb-12">Quyền lợi của bạn</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-eye text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Quyền xem</h4>
                    <p class="text-sm text-slate-600">Xem thông tin cá nhân của bạn bất cứ lúc nào</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-edit text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Quyền sửa</h4>
                    <p class="text-sm text-slate-600">Cập nhật và chỉnh sửa thông tin của bạn</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-trash-alt text-red-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2">Quyền xóa</h4>
                    <p class="text-sm text-slate-600">Yêu cầu xóa toàn bộ dữ liệu cá nhân</p>
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

.prose {
    max-width: none;
}
</style>

@endsection