{{-- Kế thừa layout chính của trang web --}}
@extends('layouts.app')

{{-- Đặt tiêu đề cho trang --}}
@section('title', 'Điều Khoản Sử Dụng - LadyFashion')

{{-- Bắt đầu phần nội dung chính của trang --}}
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-slate-50 via-white to-blue-50 py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-slate-700 to-slate-900 rounded-2xl mb-6 shadow-lg">
                <i class="fas fa-file-contract text-white text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
                Điều Khoản Sử Dụng
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed">
                Vui lòng đọc kỹ các điều khoản trước khi sử dụng dịch vụ của chúng tôi
            </p>
            <div class="mt-8 flex items-center justify-center gap-2 text-sm text-slate-500">
                <i class="far fa-clock"></i>
                <span>Có hiệu lực từ ngày 01 tháng 01 năm 2025</span>
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
                <a href="#section-1" class="px-4 py-2 bg-slate-100 text-slate-700 rounded-full text-sm font-medium hover:bg-slate-200 transition-colors">
                    Chấp nhận điều khoản
                </a>
                <a href="#section-2" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors">
                    Tài khoản
                </a>
                <a href="#section-3" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-200 transition-colors">
                    Sở hữu trí tuệ
                </a>
                <a href="#section-4" class="px-4 py-2 bg-red-100 text-red-700 rounded-full text-sm font-medium hover:bg-red-200 transition-colors">
                    Hành vi cấm
                </a>
                <a href="#section-5" class="px-4 py-2 bg-green-100 text-green-700 rounded-full text-sm font-medium hover:bg-green-200 transition-colors">
                    Mua hàng
                </a>
                <a href="#section-6" class="px-4 py-2 bg-orange-100 text-orange-700 rounded-full text-sm font-medium hover:bg-orange-200 transition-colors">
                    Thay đổi
                </a>
            </div>

            <!-- Section 1: Chấp nhận điều khoản -->
            <div id="section-1" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-slate-700 to-slate-900 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">1</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Chấp nhận các điều khoản</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-slate-700 to-slate-900 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-slate-50 rounded-2xl p-6 border-2 border-slate-200">
                        <p class="text-slate-700 leading-relaxed mb-4">
                            Bằng việc truy cập và sử dụng trang web <strong class="text-slate-900">ladyfashion.vn</strong>, bạn đồng ý tuân thủ và bị ràng buộc bởi các điều khoản và điều kiện được nêu trong tài liệu này.
                        </p>
                        <div class="bg-amber-50 border-l-4 border-amber-500 p-4 rounded-r-lg mt-4">
                            <div class="flex items-start gap-3">
                                <i class="fas fa-info-circle text-amber-600 mt-1"></i>
                                <p class="text-amber-800 text-sm">
                                    <strong>Quan trọng:</strong> Nếu bạn không đồng ý với bất kỳ điều khoản nào, vui lòng không sử dụng trang web và dịch vụ của chúng tôi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 2: Tài khoản người dùng -->
            <div id="section-2" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">2</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Tài khoản người dùng</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        Khi tạo tài khoản tại LadyFashion, bạn cam kết và chịu trách nhiệm về các điều sau:
                    </p>

                    <div class="space-y-4">
                        <!-- Responsibility 1 -->
                        <div class="flex items-start gap-4 p-5 bg-blue-50 rounded-xl border border-blue-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-user-check text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-blue-900 mb-2">Thông tin chính xác</h4>
                                <p class="text-sm text-blue-700">
                                    Cung cấp thông tin cá nhân chính xác, đầy đủ và cập nhật khi đăng ký tài khoản. Bạn có trách nhiệm thông báo cho chúng tôi nếu có bất kỳ thay đổi nào.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 2 -->
                        <div class="flex items-start gap-4 p-5 bg-indigo-50 rounded-xl border border-indigo-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-lock text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-indigo-900 mb-2">Bảo mật tài khoản</h4>
                                <p class="text-sm text-indigo-700">
                                    Bảo mật mật khẩu và thông tin đăng nhập của bạn. Không chia sẻ tài khoản với người khác. Bạn hoàn toàn chịu trách nhiệm cho mọi hoạt động xảy ra dưới tài khoản của mình.
                                </p>
                            </div>
                        </div>

                        <!-- Responsibility 3 -->
                        <div class="flex items-start gap-4 p-5 bg-purple-50 rounded-xl border border-purple-200">
                            <div class="flex-shrink-0 w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-purple-900 mb-2">Thông báo ngay lập tức</h4>
                                <p class="text-sm text-purple-700">
                                    Thông báo ngay cho chúng tôi nếu phát hiện bất kỳ hoạt động bất thường hoặc truy cập trái phép vào tài khoản của bạn qua hotline <strong>0769.223.338</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 3: Quyền sở hữu trí tuệ -->
            <div id="section-3" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">3</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Quyền sở hữu trí tuệ</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6 border-2 border-purple-200 mb-6">
                        <div class="flex items-start gap-4 mb-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-copyright text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-purple-900 mb-2">Bản quyền thuộc về LadyFashion</h4>
                                <p class="text-purple-800 leading-relaxed">
                                    Tất cả nội dung trên trang web này là tài sản của LadyFashion và được bảo vệ bởi luật sở hữu trí tuệ của Việt Nam và quốc tế.
                                </p>
                            </div>
                        </div>
                    </div>

                    <h4 class="font-bold text-slate-900 mb-4 flex items-center gap-2">
                        <i class="fas fa-shield-alt text-purple-600"></i>
                        Nội dung được bảo vệ bao gồm:
                    </h4>

                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-start gap-3 p-4 bg-white border border-slate-200 rounded-xl">
                            <i class="fas fa-image text-purple-600 text-xl mt-1"></i>
                            <div>
                                <h5 class="font-semibold text-slate-900 mb-1">Hình ảnh & Thiết kế</h5>
                                <p class="text-sm text-slate-600">Ảnh sản phẩm, logo, banner, giao diện website</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-white border border-slate-200 rounded-xl">
                            <i class="fas fa-file-alt text-purple-600 text-xl mt-1"></i>
                            <div>
                                <h5 class="font-semibold text-slate-900 mb-1">Văn bản & Nội dung</h5>
                                <p class="text-sm text-slate-600">Mô tả sản phẩm, bài viết, slogan</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-white border border-slate-200 rounded-xl">
                            <i class="fas fa-palette text-purple-600 text-xl mt-1"></i>
                            <div>
                                <h5 class="font-semibold text-slate-900 mb-1">Thiết kế thời trang</h5>
                                <p class="text-sm text-slate-600">Mẫu mã, họa tiết, bộ sưu tập độc quyền</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-4 bg-white border border-slate-200 rounded-xl">
                            <i class="fas fa-trademark text-purple-600 text-xl mt-1"></i>
                            <div>
                                <h5 class="font-semibold text-slate-900 mb-1">Nhãn hiệu</h5>
                                <p class="text-sm text-slate-600">Logo, tên thương hiệu LadyFashion</p>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 bg-red-50 border-l-4 border-red-500 p-5 rounded-r-xl">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-ban text-red-600 text-xl"></i>
                            <div>
                                <h5 class="font-bold text-red-900 mb-2">Nghiêm cấm</h5>
                                <p class="text-red-800 text-sm">
                                    Mọi hành vi sao chép, phân phối, sửa đổi hoặc sử dụng lại nội dung mà không có sự cho phép bằng văn bản từ LadyFashion đều bị nghiêm cấm và có thể bị xử lý theo pháp luật.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 4: Các hành vi bị cấm -->
            <div id="section-4" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-red-500 to-rose-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">4</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Các hành vi bị cấm</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-red-500 to-rose-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <p class="text-slate-700 leading-relaxed mb-6">
                        Khi sử dụng trang web và dịch vụ của chúng tôi, bạn cam kết <strong>KHÔNG thực hiện</strong> các hành vi sau:
                    </p>

                    <div class="bg-red-50 rounded-2xl p-6 border-2 border-red-200">
                        <div class="space-y-4">
                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">Vi phạm pháp luật</h5>
                                    <p class="text-sm text-red-700">Sử dụng trang web cho bất kỳ mục đích bất hợp pháp hoặc vi phạm pháp luật Việt Nam</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">Lừa đảo & Gian lận</h5>
                                    <p class="text-sm text-red-700">Đăng tải thông tin sai lệch, giả mạo, lừa đảo hoặc gây hiểu nhầm cho người khác</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">Xâm phạm quyền riêng tư</h5>
                                    <p class="text-sm text-red-700">Vi phạm quyền riêng tư, sở hữu trí tuệ hoặc các quyền khác của người khác</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">Tấn công hệ thống</h5>
                                    <p class="text-sm text-red-700">Phá hoại, hack, phát tán virus hoặc gây hại cho hệ thống website</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">Spam & Quảng cáo</h5>
                                    <p class="text-sm text-red-700">Gửi spam, quảng cáo không mong muốn hoặc nội dung rác</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <div class="flex-shrink-0 w-8 h-8 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white text-sm"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-red-900 mb-1">Nội dung xấu</h5>
                                    <p class="text-sm text-red-700">Đăng tải nội dung khiêu dâm, bạo lực, phân biệt đối xử hoặc vi phạm đạo đức</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 bg-orange-50 border-l-4 border-orange-500 p-5 rounded-r-xl">
                        <div class="flex items-start gap-3">
                            <i class="fas fa-gavel text-orange-600 text-xl"></i>
                            <p class="text-orange-800 text-sm">
                                <strong>Hậu quả:</strong> Vi phạm các điều khoản này có thể dẫn đến việc tài khoản bị khóa vĩnh viễn và có thể bị xử lý theo pháp luật.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 5: Mua hàng & Thanh toán -->
            <div id="section-5" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">5</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Mua hàng & Thanh toán</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Pricing -->
                        <div class="bg-green-50 rounded-xl p-6 border border-green-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-tag text-white"></i>
                                </div>
                                <h4 class="font-bold text-green-900">Giá cả</h4>
                            </div>
                            <p class="text-sm text-green-700 leading-relaxed">
                                Tất cả giá sản phẩm được niêm yết bằng VNĐ. Chúng tôi có quyền thay đổi giá bất cứ lúc nào nhưng sẽ không áp dụng cho đơn hàng đã được xác nhận.
                            </p>
                        </div>

                        <!-- Payment -->
                        <div class="bg-blue-50 rounded-xl p-6 border border-blue-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-credit-card text-white"></i>
                                </div>
                                <h4 class="font-bold text-blue-900">Thanh toán</h4>
                            </div>
                            <p class="text-sm text-blue-700 leading-relaxed">
                                Chúng tôi chấp nhận thanh toán qua chuyển khoản ngân hàng, COD và các phương thức thanh toán khác được liệt kê trên website.
                            </p>
                        </div>

                        <!-- Order Confirmation -->
                        <div class="bg-purple-50 rounded-xl p-6 border border-purple-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-check-circle text-white"></i>
                                </div>
                                <h4 class="font-bold text-purple-900">Xác nhận đơn</h4>
                            </div>
                            <p class="text-sm text-purple-700 leading-relaxed">
                                Đơn hàng chỉ được coi là hoàn tất khi bạn nhận được email/SMS xác nhận từ chúng tôi. Chúng tôi có quyền từ chối đơn hàng nếu phát hiện gian lận.
                            </p>
                        </div>

                        <!-- Delivery -->
                        <div class="bg-orange-50 rounded-xl p-6 border border-orange-200">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-10 h-10 bg-orange-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-shipping-fast text-white"></i>
                                </div>
                                <h4 class="font-bold text-orange-900">Giao hàng</h4>
                            </div>
                            <p class="text-sm text-orange-700 leading-relaxed">
                                Thời gian giao hàng chỉ là ước tính. Chúng tôi không chịu trách nhiệm về sự chậm trễ do đơn vị vận chuyển hoặc các yếu tố bất khả kháng.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 6: Thay đổi điều khoản -->
            <div id="section-6" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">6</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Thay đổi điều khoản</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-orange-500 to-red-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-2xl p-6 border-2 border-orange-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-sync-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-orange-900 mb-3">Quyền thay đổi</h4>
                                <p class="text-orange-800 leading-relaxed mb-4">
                                    LadyFashion có quyền sửa đổi hoặc cập nhật các điều khoản sử dụng này bất kỳ lúc nào mà không cần thông báo trước. Các thay đổi sẽ có hiệu lực ngay khi được đăng tải trên website.
                                </p>
                                <div class="bg-white/50 rounded-lg p-4">
                                    <p class="text-sm text-orange-800">
                                        <i class="fas fa-info-circle mr-2"></i>
                                        <strong>Khuyến nghị:</strong> Bạn nên thường xuyên kiểm tra trang này để cập nhật các thay đổi mới nhất. Việc tiếp tục sử dụng website sau khi có thay đổi đồng nghĩa với việc bạn chấp nhận các điều khoản mới.
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 7: Giới hạn trách nhiệm -->
            <div id="section-7" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">7</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Giới hạn trách nhiệm</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-yellow-50 rounded-2xl p-6 border-2 border-yellow-200">
                        <p class="text-yellow-900 leading-relaxed mb-4">
                            LadyFashion không chịu trách nhiệm cho bất kỳ thiệt hại trực tiếp, gián tiếp, ngẫu nhiên, đặc biệt hoặc hậu quả phát sinh từ:
                        </p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3 text-yellow-800">
                                <i class="fas fa-circle text-xs mt-2 flex-shrink-0"></i>
                                <span>Việc sử dụng hoặc không thể sử dụng dịch vụ của chúng tôi</span>
                            </li>
                            <li class="flex items-start gap-3 text-yellow-800">
                                <i class="fas fa-circle text-xs mt-2 flex-shrink-0"></i>
                                <span>Lỗi kỹ thuật, gián đoạn dịch vụ hoặc virus từ website</span>
                            </li>
                            <li class="flex items-start gap-3 text-yellow-800">
                                <i class="fas fa-circle text-xs mt-2 flex-shrink-0"></i>
                                <span>Thông tin không chính xác hoặc lỗi in ấn trên website</span>
                            </li>
                            <li class="flex items-start gap-3 text-yellow-800">
                                <i class="fas fa-circle text-xs mt-2 flex-shrink-0"></i>
                                <span>Truy cập trái phép hoặc thay đổi dữ liệu của bạn</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Section 8: Liên hệ -->
            <div id="section-8" class="mb-16 scroll-mt-24">
                <div class="flex items-start gap-4 mb-6">
                    <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-teal-500 to-cyan-500 rounded-xl flex items-center justify-center shadow-lg">
                        <span class="text-white font-bold text-lg">8</span>
                    </div>
                    <div class="flex-1">
                        <h2 class="text-2xl font-bold text-slate-900 mb-2">Liên hệ & Giải quyết tranh chấp</h2>
                        <div class="h-1 w-20 bg-gradient-to-r from-teal-500 to-cyan-500 rounded-full"></div>
                    </div>
                </div>
                <div class="pl-16">
                    <div class="bg-teal-50 rounded-2xl p-6 border-2 border-teal-200 mb-6">
                        <p class="text-teal-900 leading-relaxed mb-4">
                            Nếu bạn có bất kỳ câu hỏi nào về Điều Khoản Sử Dụng này, vui lòng liên hệ với chúng tôi qua:
                        </p>
                        <div class="grid md:grid-cols-2 gap-4">
                            <a href="tel:0769223338" class="flex items-center gap-3 p-4 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-phone-alt text-teal-600 text-xl"></i>
                                <div>
                                    <p class="text-xs text-slate-500">Hotline</p>
                                    <p class="font-semibold text-teal-900">0769.223.338</p>
                                </div>
                            </a>
                            <a href="mailto:lynlydesign2022@gmail.com" class="flex items-center gap-3 p-4 bg-white rounded-lg hover:shadow-md transition-shadow">
                                <i class="fas fa-envelope text-teal-600 text-xl"></i>
                                <div>
                                    <p class="text-xs text-slate-500">Email</p>
                                    <p class="font-semibold text-teal-900">lynlydesign2022@gmail.com</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="bg-slate-50 rounded-xl p-5 border border-slate-200">
                        <h4 class="font-bold text-slate-900 mb-3 flex items-center gap-2">
                            <i class="fas fa-balance-scale text-slate-600"></i>
                            Luật áp dụng
                        </h4>
                        <p class="text-slate-700 text-sm leading-relaxed">
                            Các điều khoản này được điều chỉnh và giải thích theo pháp luật Việt Nam. Mọi tranh chấp phát sinh sẽ được giải quyết thông qua thương lượng, hòa giải. Nếu không đạt được thỏa thuận, tranh chấp sẽ được đưa ra Tòa án nhân dân có thẩm quyền tại Hà Nội.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="mt-16 bg-gradient-to-br from-slate-700 via-slate-800 to-slate-900 rounded-2xl p-8 text-center text-white shadow-2xl">
                <i class="fas fa-handshake text-5xl mb-4 opacity-90"></i>
                <h3 class="text-2xl font-bold mb-3">Bạn đã đọc và hiểu các điều khoản?</h3>
                <p class="mb-6 opacity-90 max-w-2xl mx-auto">
                    Bằng cách tiếp tục sử dụng website, bạn đồng ý tuân thủ tất cả các điều khoản và điều kiện trên
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/" class="inline-flex items-center justify-center gap-2 bg-white text-slate-800 font-semibold py-3 px-6 rounded-lg hover:bg-gray-100 transition-all">
                        <i class="fas fa-home"></i>
                        Về trang chủ
                    </a>
                    <a href="/collections" class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur text-white font-semibold py-3 px-6 rounded-lg hover:bg-white/30 transition-all border border-white/30">
                        <i class="fas fa-shopping-bag"></i>
                        Mua sắm ngay
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Summary Section -->
<section class="py-16 bg-gradient-to-b from-slate-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">
                    <i class="fas fa-clipboard-check text-blue-600 mr-2"></i>
                    Tóm tắt điều khoản quan trọng
                </h3>
                <p class="text-slate-600">Những điểm cần nhớ khi sử dụng dịch vụ</p>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-user-lock text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Bảo mật tài khoản</h4>
                    <p class="text-xs text-slate-600">Bạn chịu trách nhiệm về mật khẩu và hoạt động tài khoản</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-copyright text-purple-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Bản quyền</h4>
                    <p class="text-xs text-slate-600">Mọi nội dung thuộc quyền sở hữu của LadyFashion</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-ban text-red-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Hành vi cấm</h4>
                    <p class="text-xs text-slate-600">Không spam, lừa đảo hoặc vi phạm pháp luật</p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow text-center border border-slate-100">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-sync-alt text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="font-bold text-slate-900 mb-2 text-sm">Cập nhật</h4>
                    <p class="text-xs text-slate-600">Điều khoản có thể thay đổi, kiểm tra thường xuyên</p>
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