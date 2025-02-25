<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhaCungCap;

class NhaCungCapController extends Controller
{
    // Hiển thị trang quản lý mặt hàng
    public function index()
    {
        $nhacungcaps = NhaCungCap::all(); // Lấy danh sách mặt hàng

        return view('layouts-admin.nha-cung-cap', compact('nhacungcaps'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ten' => 'required|string|unique:nhacungcap,TenNhaCungCap|max:255',
            'dia_chi' => 'required|string|max:255',
            'so_dien_thoai' => 'required|string|max:20',
            'email' => 'required|email|unique:nhacungcap,Email'
        ]);

        // Tạo nhà cung cấp mới
        $nhaCungCap = NhaCungCap::create([
            'TenNhaCungCap' => $request->ten,
            'DiaChi' => $request->dia_chi,
            'SoDienThoai' => $request->so_dien_thoai,
            'Email' => $request->email
        ]);

        // Trả về JSON
        return response()->json([
            'success' => true,
            'message' => 'Thêm nhà cung cấp thành công!',
            'data' => $nhaCungCap
        ], 201);
    }
}
