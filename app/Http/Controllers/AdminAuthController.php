<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    /**
     * ✅ HÀM LOGIN ĐÃ ĐƯỢC CẬP NHẬT HOÀN CHỈNH
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($credentials['username'] === 'admin' && $credentials['password'] === '123') {
            
            // 1. Đặt session flag (Dùng $request->session() cho nhất quán)
            $request->session()->put('is_admin', true);

            // 2. ✅ BƯỚC QUAN TRỌNG BỊ THIẾU: Tái tạo session
            $request->session()->regenerate();

            // 3. Chuyển hướng đến trang dashboard
            // Dùng intended() là một thói quen tốt, nó sẽ đưa người dùng về trang họ muốn vào trước khi bị bắt đăng nhập.
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'username' => 'Thông tin đăng nhập không chính xác.',
        ])->onlyInput('username');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('is_admin');
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}