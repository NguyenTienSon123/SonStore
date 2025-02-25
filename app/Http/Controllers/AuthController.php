<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\TaiKhoan; // Đảm bảo bạn có Model TaiKhoan

class AuthController extends Controller
{
    public function dangNhap(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'gmail2' => 'required|email',
            'MatKhau2' => 'required'
        ], [
            'gmail2.required' => 'Vui lòng nhập email',
            'gmail2.email' => 'Email không hợp lệ',
            'MatKhau2.required' => 'Vui lòng nhập mật khẩu'
        ]);

        // Tìm tài khoản trong DB
        $taiKhoan = TaiKhoan::where('gmail', $request->gmail2)->first();

        if (!$taiKhoan || !Hash::check($request->MatKhau2, $taiKhoan->MatKhau)) {
            return back()->with('error', 'Email hoặc mật khẩu không đúng')->withInput();
        }

        // Kiểm tra trạng thái tài khoản
        if ($taiKhoan->TrangThai == 0) {
            return back()->with('error', 'Tài khoản đã bị vô hiệu hóa');
        }

        // Lưu thông tin user vào session
        session([
            'user' => [
                'MaTaiKhoan' => $taiKhoan->MaTaiKhoan,
                'HoVaTen' => $taiKhoan->HoVaTen,
                'gmail' => $taiKhoan->gmail,
                'Avata' => $taiKhoan->Avata,
                'Role' => $taiKhoan->Role
            ]
        ]);

        // Kiểm tra quyền Admin
        if ($taiKhoan->Role === 'admin') {
            return redirect()->route('admin'); // Điều hướng đến trang admin
        }

        return redirect()->route('home'); // Quay lại trang Home
    }

    public function dangXuat()
    {
        Session::forget('user');
        return redirect()->route('home');
    }
    
    public function register(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'HoVaTen' => 'required|string|max:255',
            'gmail' => 'required|email|unique:taikhoan,gmail',
            'MatKhau' => 'required|min:6|confirmed',
        ], [
            'HoVaTen.required' => 'Vui lòng nhập họ và tên.',
            'gmail.required' => 'Vui lòng nhập email.',
            'gmail.email' => 'Email không hợp lệ.',
            'gmail.unique' => 'Email đã đăng ký trước đó.',
            'MatKhau.required' => 'Vui lòng nhập mật khẩu.',
            'MatKhau.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'MatKhau.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);
    
        // Tạo tài khoản mới
        TaiKhoan::create([
            'HoVaTen' => $request->HoVaTen,
            'gmail' => $request->gmail,
            'MatKhau' => Hash::make($request->MatKhau),
            'Role' => 'user',
            'TrangThai' => 1
        ]);
    
        return redirect('/')->with('success', 'Đăng ký thành công! Vui lòng đăng nhập.');
    }
}

