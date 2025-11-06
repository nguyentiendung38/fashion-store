{{-- Kế thừa layout chính của trang web --}}
@extends('layouts.app')

{{-- Đặt tiêu đề cho trang --}}
@section('title', 'Hướng Dẫn Chọn Size - Lynlydesign Fashion')

{{-- Bắt đầu phần nội dung chính của trang --}}
@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-rose-50 via-white to-pink-50 py-20">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-rose-500 to-pink-600 rounded-2xl mb-6 shadow-lg">
                <i class="fas fa-ruler-combined text-white text-3xl"></i>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 mb-4">
                Hướng Dẫn Chọn Size
            </h1>
            <p class="text-lg text-slate-600 leading-relaxed">
                Tìm size hoàn hảo cho bạn với hướng dẫn chi tiết và bảng size chuẩn
            </p>
            <div class="mt-8 inline-flex items-center gap-2 px-6 py-3 bg-rose-100 text-rose-700 rounded-full font-semibold">
                <i class="fas fa-tape"></i>
                <span>Đo chính xác = Vừa vặn hoàn hảo</span>
            </div>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-5xl mx-auto">
            
            <!-- Quick Navigation -->
            <div class="flex flex-wrap gap-3 mb-12 pb-8 border-b border-slate-200 justify-center">
                <a href="#size-table" class="px-4 py-2 bg-rose-100 text-rose-700 rounded-full text-sm font-medium hover:bg-rose-200 transition-colors">
                    <i class="fas fa-table mr-1"></i> Bảng size
                </a>
                <a href="#how-to-measure" class="px-4 py-2 bg-pink-100 text-pink-700 rounded-full text-sm font-medium hover:bg-pink-200 transition-colors">
                    <i class="fas fa-ruler mr-1"></i> Cách đo
                </a>
                <a href="#tips" class="px-4 py-2 bg-purple-100 text-purple-700 rounded-full text-sm font-medium hover:bg-purple-200 transition-colors">
                    <i class="fas fa-lightbulb mr-1"></i> Mẹo hay
                </a>
                <a href="#contact" class="px-4 py-2 bg-blue-100 text-blue-700 rounded-full text-sm font-medium hover:bg-blue-200 transition-colors">
                    <i class="fas fa-headset mr-1"></i> Tư vấn
                </a>
            </div>

            <!-- Introduction -->
            <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl p-8 mb-12 border border-rose-200">
                <div class="flex items-start gap-4">
                    <div class="flex-shrink-0 w-12 h-12 bg-rose-500 rounded-xl flex items-center justify-center">
                        <i class="fas fa-info-circle text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-rose-900 mb-2 text-lg">Chọn size như thế nào?</h3>
                        <p class="text-rose-800 leading-relaxed">
                            Để chọn được sản phẩm ưng ý và vừa vặn nhất, bạn vui lòng tham khảo bảng thông số dưới đây. Nếu số đo của bạn nằm giữa 2 size, chúng tôi khuyên bạn nên chọn size lớn hơn để thoải mái hơn.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Size Table Section -->
            <div id="size-table" class="mb-16 scroll-mt-24">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-slate-900 mb-3">
                        <span class="bg-gradient-to-r from-rose-500 to-pink-600 bg-clip-text text-transparent">
                            Bảng Size Chuẩn
                        </span>
                    </h2>
                    <p class="text-slate-600">Tham khảo số đo chuẩn cho từng size</p>
                </div>

                <!-- Desktop Table -->
                <div class="hidden md:block overflow-hidden rounded-2xl shadow-lg border border-slate-200">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gradient-to-r from-rose-500 to-pink-600 text-white">
                                <th class="py-4 px-6 text-left font-bold">SIZE</th>
                                <th class="py-4 px-6 text-center font-bold">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-female text-2xl mb-1"></i>
                                        <span>Vòng ngực (cm)</span>
                                    </div>
                                </th>
                                <th class="py-4 px-6 text-center font-bold">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-circle text-sm mb-1"></i>
                                        <span>Vòng eo (cm)</span>
                                    </div>
                                </th>
                                <th class="py-4 px-6 text-center font-bold">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-heart text-lg mb-1"></i>
                                        <span>Vòng mông (cm)</span>
                                    </div>
                                </th>
                                <th class="py-4 px-6 text-center font-bold">
                                    <div class="flex flex-col items-center">
                                        <i class="fas fa-weight text-lg mb-1"></i>
                                        <span>Cân nặng (kg)</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            <tr class="border-b border-slate-100 hover:bg-rose-50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-lg flex items-center justify-center">
                                            <span class="text-white font-bold text-lg">S</span>
                                        </div>
                                        <span class="font-semibold text-slate-900">Size S</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">82 - 86</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">64 - 68</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">88 - 92</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">45 - 50</td>
                            </tr>
                            <tr class="border-b border-slate-100 hover:bg-rose-50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center">
                                            <span class="text-white font-bold text-lg">M</span>
                                        </div>
                                        <span class="font-semibold text-slate-900">Size M</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">86 - 90</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">68 - 72</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">92 - 96</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">50 - 55</td>
                            </tr>
                            <tr class="border-b border-slate-100 hover:bg-rose-50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-500 rounded-lg flex items-center justify-center">
                                            <span class="text-white font-bold text-lg">L</span>
                                        </div>
                                        <span class="font-semibold text-slate-900">Size L</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">90 - 94</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">72 - 76</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">96 - 100</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">55 - 60</td>
                            </tr>
                            <tr class="hover:bg-rose-50 transition-colors">
                                <td class="py-4 px-6">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                                            <span class="text-white font-bold text-lg">XL</span>
                                        </div>
                                        <span class="font-semibold text-slate-900">Size XL</span>
                                    </div>
                                </td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">94 - 98</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">76 - 80</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">100 - 104</td>
                                <td class="py-4 px-6 text-center font-semibold text-slate-700">60 - 65</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Mobile Cards -->
                <div class="md:hidden space-y-4">
                    <!-- Size S -->
                    <div class="bg-white rounded-xl shadow-lg border-2 border-blue-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-cyan-500 p-4 text-white">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-xl">S</span>
                                </div>
                                <span class="font-bold text-lg">Size S</span>
                            </div>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng ngực</span>
                                <span class="font-bold text-slate-900">82 - 86 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng eo</span>
                                <span class="font-bold text-slate-900">64 - 68 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng mông</span>
                                <span class="font-bold text-slate-900">88 - 92 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-slate-600">Cân nặng</span>
                                <span class="font-bold text-slate-900">45 - 50 kg</span>
                            </div>
                        </div>
                    </div>

                    <!-- Size M -->
                    <div class="bg-white rounded-xl shadow-lg border-2 border-green-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-green-500 to-emerald-500 p-4 text-white">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-xl">M</span>
                                </div>
                                <span class="font-bold text-lg">Size M</span>
                            </div>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng ngực</span>
                                <span class="font-bold text-slate-900">86 - 90 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng eo</span>
                                <span class="font-bold text-slate-900">68 - 72 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng mông</span>
                                <span class="font-bold text-slate-900">92 - 96 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-slate-600">Cân nặng</span>
                                <span class="font-bold text-slate-900">50 - 55 kg</span>
                            </div>
                        </div>
                    </div>

                    <!-- Size L -->
                    <div class="bg-white rounded-xl shadow-lg border-2 border-orange-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 p-4 text-white">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-xl">L</span>
                                </div>
                                <span class="font-bold text-lg">Size L</span>
                            </div>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng ngực</span>
                                <span class="font-bold text-slate-900">90 - 94 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng eo</span>
                                <span class="font-bold text-slate-900">72 - 76 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng mông</span>
                                <span class="font-bold text-slate-900">96 - 100 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-slate-600">Cân nặng</span>
                                <span class="font-bold text-slate-900">55 - 60 kg</span>
                            </div>
                        </div>
                    </div>

                    <!-- Size XL -->
                    <div class="bg-white rounded-xl shadow-lg border-2 border-purple-200 overflow-hidden">
                        <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-4 text-white">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-white/20 rounded-lg flex items-center justify-center">
                                    <span class="font-bold text-xl">XL</span>
                                </div>
                                <span class="font-bold text-lg">Size XL</span>
                            </div>
                        </div>
                        <div class="p-4 space-y-3">
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng ngực</span>
                                <span class="font-bold text-slate-900">94 - 98 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng eo</span>
                                <span class="font-bold text-slate-900">76 - 80 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2 border-b border-slate-100">
                                <span class="text-slate-600">Vòng mông</span>
                                <span class="font-bold text-slate-900">100 - 104 cm</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="text-slate-600">Cân nặng</span>
                                <span class="font-bold text-slate-900">60 - 65 kg</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Note -->
                <div class="mt-6 bg-amber-50 border-l-4 border-amber-500 p-5 rounded-r-xl">
                    <div class="flex items-start gap-3">
                        <i class="fas fa-info-circle text-amber-600 text-xl mt-1"></i>
                        <div>
                            <h4 class="font-bold text-amber-900 mb-1">Lưu ý quan trọng</h4>
                            <p class="text-amber-800 text-sm leading-relaxed">
                                Bảng size chỉ mang tính chất tham khảo, có thể thay đổi tùy thuộc vào chất liệu vải, kiểu dáng và phom dáng sản phẩm. Để chọn size chính xác nhất, vui lòng liên hệ với chúng tôi để được tư vấn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- How to Measure Section -->
            <div id="how-to-measure" class="mb-16 scroll-mt-24">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-slate-900 mb-3">
                        <span class="bg-gradient-to-r from-pink-500 to-rose-600 bg-clip-text text-transparent">
                            Hướng Dẫn Đo 3 Vòng
                        </span>
                    </h2>
                    <p class="text-slate-600">Đo chính xác để chọn size hoàn hảo</p>
                </div>

                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <!-- Vòng 1 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-rose-200 hover:shadow-xl transition-shadow">
                        <div class="bg-gradient-to-br from-rose-500 to-pink-500 p-6 text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-female text-4xl"></i>
                            </div>
                            <h3 class="font-bold text-xl">Vòng Ngực (Vòng 1)</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-rose-100 rounded-full flex items-center justify-center">
                                        <span class="text-rose-600 font-bold">1</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Đứng thẳng, thả lỏng vai</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-rose-100 rounded-full flex items-center justify-center">
                                        <span class="text-rose-600 font-bold">2</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Dùng thước dây quấn quanh phần đầy đặn nhất của ngực</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-rose-100 rounded-full flex items-center justify-center">
                                        <span class="text-rose-600 font-bold">3</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Thước phải nằm ngang, song song với mặt đất</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vòng 2 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-purple-200 hover:shadow-xl transition-shadow">
                        <div class="bg-gradient-to-br from-purple-500 to-indigo-500 p-6 text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-circle text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-xl">Vòng Eo (Vòng 2)</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <span class="text-purple-600 font-bold">1</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Tìm phần nhỏ nhất của eo</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <span class="text-purple-600 font-bold">2</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Thường ở trên rốn khoảng 2-3 cm</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                        <span class="text-purple-600 font-bold">3</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Không siết quá chặt, để vừa khít tự nhiên</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Vòng 3 -->
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden border-2 border-blue-200 hover:shadow-xl transition-shadow">
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 p-6 text-white text-center">
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-heart text-3xl"></i>
                            </div>
                            <h3 class="font-bold text-xl">Vòng Mông (Vòng 3)</h3>
                        </div>
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">1</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Đứng thẳng, hai chân khép lại</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">2</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Đo quanh phần đầy đặn nhất của mông</p>
                                </div>
                                <div class="flex items-start gap-3">
                                    <div class="flex-shrink-0 w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                        <span class="text-blue-600 font-bold">3</span>
                                    </div>
                                    <p class="text-slate-700 text-sm">Giữ thước nằm ngang quanh người</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Measurement Tools -->
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-2xl p-8 border-2 border-indigo-200">
                    <h3 class="font-bold text-indigo-900 mb-4 flex items-center gap-2 text-lg">
                        <i class="fas fa-tools"></i>
                        Dụng cụ cần thiết
                    </h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 bg-white p-4 rounded-lg">
                            <div class="w-10 h-10 bg-indigo-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-ruler text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-slate-900">Thước dây mềm</h5>
                                <p class="text-xs text-slate-600">Thước may hoặc thước dây đo</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-3 bg-white p-4 rounded-lg">
                            <div class="w-10 h-10 bg-purple-500 rounded-lg flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-user-friends text-white"></i>
                            </div>
                            <div>
                                <h5 class="font-semibold text-slate-900">Người hỗ trợ</h5>
                                <p class="text-xs text-slate-600">Nhờ người khác đo sẽ chính xác hơn</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tips Section -->
            <div id="tips" class="mb-16 scroll-mt-24">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-slate-900 mb-3">
                        <span class="bg-gradient-to-r from-amber-500 to-orange-600 bg-clip-text text-transparent">
                            Mẹo Chọn Size Hoàn Hảo
                        </span>
                    </h2>
                    <p class="text-slate-600">Những lưu ý giúp bạn chọn size chính xác</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <!-- Tip 1 -->
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-xl p-6 border-2 border-green-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-green-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-check-circle text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-green-900 mb-2">Đo vào buổi sáng</h4>
                                <p class="text-green-800 text-sm leading-relaxed">
                                    Cơ thể thường nhỏ hơn vào buổi sáng. Đo vào thời điểm này sẽ cho kết quả chính xác nhất.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 2 -->
                    <div class="bg-gradient-to-br from-blue-50 to-cyan-50 rounded-xl p-6 border-2 border-blue-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-tshirt text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-900 mb-2">Mặc đồ lót mỏng</h4>
                                <p class="text-blue-800 text-sm leading-relaxed">
                                    Khi đo, chỉ mặc đồ lót mỏng để số đo chính xác, không bị chênh lệch.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 3 -->
                    <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6 border-2 border-purple-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-arrows-alt-h text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-purple-900 mb-2">Số đo giữa 2 size?</h4>
                                <p class="text-purple-800 text-sm leading-relaxed">
                                    Nếu số đo nằm giữa 2 size, chọn size lớn hơn để thoải mái. Nếu thích ôm sát, chọn size nhỏ hơn.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 4 -->
                    <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-xl p-6 border-2 border-orange-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-redo text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-orange-900 mb-2">Đo nhiều lần</h4>
                                <p class="text-orange-800 text-sm leading-relaxed">
                                    Đo 2-3 lần và lấy số trung bình để đảm bảo kết quả chính xác nhất.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 5 -->
                    <div class="bg-gradient-to-br from-teal-50 to-cyan-50 rounded-xl p-6 border-2 border-teal-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-teal-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-weight text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-teal-900 mb-2">Cân nặng tham khảo</h4>
                                <p class="text-teal-800 text-sm leading-relaxed">
                                    Cân nặng chỉ mang tính tham khảo. Hãy ưu tiên số đo 3 vòng để chọn size chính xác.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Tip 6 -->
                    <div class="bg-gradient-to-br from-rose-50 to-pink-50 rounded-xl p-6 border-2 border-rose-200">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 w-12 h-12 bg-rose-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-notes-medical text-white text-xl"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-rose-900 mb-2">Xem mô tả chi tiết</h4>
                                <p class="text-rose-800 text-sm leading-relaxed">
                                    Mỗi sản phẩm có thông tin size riêng. Luôn kiểm tra phần mô tả trước khi đặt hàng.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Size Comparison -->
            <div class="mb-16">
                <div class="bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8 border-2 border-slate-200">
                    <h3 class="font-bold text-slate-900 mb-6 text-xl text-center">
                        <i class="fas fa-balance-scale mr-2"></i>
                        So sánh Size với các thương hiệu khác
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full">
                            <thead>
                                <tr class="border-b-2 border-slate-300">
                                    <th class="py-3 px-4 text-left font-bold text-slate-700">Lynlydesign Fashion</th>
                                    <th class="py-3 px-4 text-center font-bold text-slate-700">Quốc tế</th>
                                    <th class="py-3 px-4 text-center font-bold text-slate-700">Châu Âu</th>
                                    <th class="py-3 px-4 text-center font-bold text-slate-700">Anh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-slate-200">
                                    <td class="py-3 px-4 font-semibold text-slate-900">S</td>
                                    <td class="py-3 px-4 text-center text-slate-700">XS - S</td>
                                    <td class="py-3 px-4 text-center text-slate-700">34 - 36</td>
                                    <td class="py-3 px-4 text-center text-slate-700">6 - 8</td>
                                </tr>
                                <tr class="border-b border-slate-200">
                                    <td class="py-3 px-4 font-semibold text-slate-900">M</td>
                                    <td class="py-3 px-4 text-center text-slate-700">M</td>
                                    <td class="py-3 px-4 text-center text-slate-700">38 - 40</td>
                                    <td class="py-3 px-4 text-center text-slate-700">10 - 12</td>
                                </tr>
                                <tr class="border-b border-slate-200">
                                    <td class="py-3 px-4 font-semibold text-slate-900">L</td>
                                    <td class="py-3 px-4 text-center text-slate-700">L</td>
                                    <td class="py-3 px-4 text-center text-slate-700">42 - 44</td>
                                    <td class="py-3 px-4 text-center text-slate-700">14 - 16</td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-semibold text-slate-900">XL</td>
                                    <td class="py-3 px-4 text-center text-slate-700">XL</td>
                                    <td class="py-3 px-4 text-center text-slate-700">46 - 48</td>
                                    <td class="py-3 px-4 text-center text-slate-700">18 - 20</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Contact Section -->
            <div id="contact" class="mb-16 scroll-mt-24">
                <div class="bg-gradient-to-br from-rose-500 via-pink-500 to-purple-600 rounded-2xl p-8 md:p-12 text-center text-white shadow-2xl">
                    <div class="max-w-2xl mx-auto">
                        <i class="fas fa-headset text-6xl mb-6 opacity-90"></i>
                        <h3 class="text-3xl font-bold mb-4">Vẫn chưa chắc chắn về size?</h3>
                        <p class="text-lg mb-8 opacity-90">
                            Đừng lo! Đội ngũ stylist của chúng tôi sẵn sàng tư vấn size miễn phí dựa trên số đo của bạn
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="https://zalo.me/0769223338" target="_blank" class="inline-flex items-center justify-center gap-3 bg-white text-pink-600 font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transition-all shadow-lg">
                                <i class="fas fa-comments text-xl"></i>
                                <span>Chat qua Zalo ngay</span>
                            </a>
                            <a href="tel:0769223338" class="inline-flex items-center justify-center gap-3 bg-white/20 backdrop-blur text-white font-bold py-4 px-8 rounded-xl hover:bg-white/30 transition-all border-2 border-white/50">
                                <i class="fas fa-phone-alt text-xl"></i>
                                <span>Gọi: 0769.223.338</span>
                            </a>
                        </div>
                        <div class="mt-8 flex items-center justify-center gap-2 text-sm opacity-80">
                            <i class="fas fa-clock"></i>
                            <span>Tư vấn miễn phí 24/7</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mb-16">
                <div class="text-center mb-8">
                    <h2 class="text-3xl font-bold text-slate-900 mb-3">
                        <span class="bg-gradient-to-r from-blue-500 to-cyan-600 bg-clip-text text-transparent">
                            Câu Hỏi Thường Gặp
                        </span>
                    </h2>
                    <p class="text-slate-600">Giải đáp những thắc mắc về size</p>
                </div>

                <div class="space-y-4">
                    <!-- FAQ 1 -->
                    <div class="faq-item bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                            <span>Tôi nên chọn size nào nếu số đo nằm giữa 2 size?</span>
                            <i class="fas fa-chevron-down text-rose-600"></i>
                        </button>
                        <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed">
                            Nếu số đo của bạn nằm giữa 2 size, chúng tôi khuyên bạn nên chọn size lớn hơn để thoải mái hơn khi mặc. Tuy nhiên, nếu bạn thích phong cách ôm sát, có thể chọn size nhỏ hơn. Liên hệ với chúng tôi để được tư vấn cụ thể!
                        </div>
                    </div>

                    <!-- FAQ 2 -->
                    <div class="faq-item bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                            <span>Size có chuẩn với tất cả sản phẩm không?</span>
                            <i class="fas fa-chevron-down text-rose-600"></i>
                        </button>
                        <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                            Bảng size có thể thay đổi tùy thuộc vào kiểu dáng và chất liệu từng sản phẩm. Một số sản phẩm có form rộng hoặc ôm hơn. Luôn kiểm tra phần mô tả chi tiết size của từng sản phẩm trước khi đặt hàng nhé.
                        </div>
                    </div>

                    <!-- FAQ 3 -->
                    <div class="faq-item bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                            <span>Nếu đặt sai size thì có đổi được không?</span>
                            <i class="fas fa-chevron-down text-rose-600"></i>
                        </button>
                        <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                            Có! Chúng tôi hỗ trợ đổi size trong vòng 7 ngày nếu sản phẩm còn nguyên tem mác, chưa qua sử dụng. Bạn chịu phí vận chuyển đổi hàng. Xem chi tiết tại <a href="/chinh-sach-doi-tra" class="text-rose-600 font-semibold hover:underline">Chính Sách Đổi Trả</a>.
                        </div>
                    </div>

                    <!-- FAQ 4 -->
                    <div class="faq-item bg-white rounded-xl shadow-sm border border-slate-200 overflow-hidden">
                        <button class="faq-question w-full text-left px-6 py-5 font-semibold text-slate-900 flex items-center justify-between hover:bg-slate-50 transition-colors">
                            <span>Làm sao để đo chính xác nhất?</span>
                            <i class="fas fa-chevron-down text-rose-600"></i>
                        </button>
                        <div class="faq-answer px-6 pb-5 text-slate-600 leading-relaxed hidden">
                            Nhờ người khác đo giúp sẽ chính xác hơn tự đo. Đo vào buổi sáng, chỉ mặc đồ lót mỏng, đứng thẳng và thả lỏng. Đo 2-3 lần rồi lấy số trung bình. Sử dụng thước dây mềm và không siết quá chặt.
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Visual Guide Section -->
<section class="py-16 bg-gradient-to-b from-slate-50 to-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h3 class="text-2xl font-bold text-slate-900 mb-4">
                    <i class="fas fa-images text-rose-500 mr-2"></i>
                    Hình ảnh minh họa
                </h3>
                <p class="text-slate-600">Tham khảo hình ảnh sản phẩm trên người mẫu</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="aspect-[3/4] bg-gradient-to-br from-blue-100 to-cyan-100 flex items-center justify-center">
                        <div class="text-center text-blue-600">
                            <i class="fas fa-image text-4xl mb-2"></i>
                            <p class="font-semibold">Size S</p>
                            <p class="text-sm">Model: 1m60 - 48kg</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-sm text-slate-600">Người mẫu mặc size S</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="aspect-[3/4] bg-gradient-to-br from-green-100 to-emerald-100 flex items-center justify-center">
                        <div class="text-center text-green-600">
                            <i class="fas fa-image text-4xl mb-2"></i>
                            <p class="font-semibold">Size M</p>
                            <p class="text-sm">Model: 1m65 - 52kg</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-sm text-slate-600">Người mẫu mặc size M</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="aspect-[3/4] bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center">
                        <div class="text-center text-purple-600">
                            <i class="fas fa-image text-4xl mb-2"></i>
                            <p class="font-semibold">Size L</p>
                            <p class="text-sm">Model: 1m68 - 58kg</p>
                        </div>
                    </div>
                    <div class="p-4 text-center">
                        <p class="text-sm text-slate-600">Người mẫu mặc size L</p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-slate-600 text-sm italic">
                    * Hình ảnh chỉ mang tính chất minh họa. Vui lòng tham khảo bảng size chi tiết ở trên
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-r from-slate-800 to-slate-900 rounded-2xl p-8 md:p-12 text-center text-white shadow-2xl">
                <i class="fas fa-shopping-bag text-5xl mb-4 opacity-90"></i>
                <h3 class="text-2xl md:text-3xl font-bold mb-3">Đã tìm được size của bạn?</h3>
                <p class="mb-6 opacity-90 text-lg">
                    Khám phá bộ sưu tập váy đầm mới nhất với đầy đủ size từ S đến XL
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/collections" class="inline-flex items-center justify-center gap-2 bg-white text-slate-800 font-bold py-4 px-8 rounded-xl hover:bg-gray-100 transition-all">
                        <i class="fas fa-shopping-cart"></i>
                        Mua sắm ngay
                    </a>
                    <a href="/" class="inline-flex items-center justify-center gap-2 bg-white/20 backdrop-blur text-white font-bold py-4 px-8 rounded-xl hover:bg-white/30 transition-all border-2 border-white/30">
                        <i class="fas fa-home"></i>
                        Về trang chủ
                    </a>
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

<script>
// FAQ Toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.querySelector('.faq-answer');
        const icon = question.querySelector('i');
        
        question.addEventListener('click', function() {
            // Close all other FAQs
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    const otherAnswer = otherItem.querySelector('.faq-answer');
                    const otherIcon = otherItem.querySelector('.faq-question i');
                    otherAnswer.classList.add('hidden');
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });
            
            // Toggle current FAQ
            answer.classList.toggle('hidden');
            icon.style.transform = answer.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
        });
    });
});
</script>

@endsection