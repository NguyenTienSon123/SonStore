<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatHang;
use App\Models\LoaiMatHang;

class MatHangController extends Controller
{
    public function showByCategory($id)
    {
        $category = Loaimathang::findOrFail($id);
        $products = Mathang::where('MaLoaiMatHang', $id)->get();
        $categories = Loaimathang::all(); // Lấy danh sách loại mặt hàng

        return view('layouts.category', compact('category', 'products', 'categories'));
    }

    // Hiển thị trang quản lý mặt hàng
    public function index()
    {
        $loaiMatHangs = LoaiMatHang::all(); // Lấy danh sách loại mặt hàng
        $matHangs = MatHang::all(); // Lấy danh sách mặt hàng

        return view('layouts-admin.mat-hang', compact('loaiMatHangs', 'matHangs'));
    }

    public function store(Request $request)
    {
        // Kiểm tra dữ liệu đầu vào
        $request->validate([
            'ten' => 'required|string|max:255',
            'gia' => 'required|numeric|min:0',
            'mo_ta' => 'nullable|string',
            'loai_mat_hang_id' => 'required|integer|exists:loaimathang,MaLoaiMatHang',
            'trang_thai' => 'required|integer|in:0,1,2',
            'hinh_anh' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Xử lý ảnh (nếu có)
        $imagePath = null;
        if ($request->hasFile('hinh_anh')) {
            $imagePath = $request->file('hinh_anh')->store('mathang', 'public');
        }

        // Tạo mặt hàng mới
        $matHang = MatHang::create([
            'TenMatHang' => $request->ten,
            'MaLoaiMatHang' => $request->loai_mat_hang_id,
            'Gia' => $request->gia,
            'TrangThai' => $request->trang_thai,
            'MoTa' => $request->mo_ta,
            'ngay_them' => now(),
            'Anh' => $imagePath
        ]);

        // Trả về JSON
        return response()->json([
            'success' => true,
            'message' => 'Thêm mặt hàng thành công!',
            'mat_hang' => $matHang
        ], 201);
    }
}
