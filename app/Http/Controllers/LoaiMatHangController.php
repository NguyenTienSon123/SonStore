<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiMatHang;
use Carbon\Carbon;

class LoaiMatHangController extends Controller
{
    // Lấy tất cả loại mặt hàng và hiển thị danh sách
    public function index()
    {
        $loaiMatHangs = LoaiMatHang::all();
        return view('layouts-admin.loai-mat-hang', compact('loaiMatHangs'));
    }

    // Thêm mới loại mặt hàng
    public function store(Request $request)
    {
        // Kiểm tra trùng tên
        $existingLoai = LoaiMatHang::where('TenLoaiMatHang', $request->ten_loai)->first();
        if ($existingLoai) {
            return response()->json([
                'success' => false,
                'message' => 'Tên loại mặt hàng đã tồn tại!',
            ]);
        }

        // Thêm loại mặt hàng mới
        $loaiMatHang = LoaiMatHang::create([
            'TenLoaiMatHang' => $request->ten_loai,
            'TrangThai' => 1,
            'ngay_them' => now(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Thêm loại mặt hàng thành công!',
            'data' => $loaiMatHang
        ]);
    }


    public function destroy($id)
    {
        $loaiMatHang = LoaiMatHang::find($id);

        if (!$loaiMatHang) {
            return response()->json([
                'success' => false,
                'message' => 'Loại mặt hàng không tồn tại!'
            ]);
        }

        $loaiMatHang->delete();

        return response()->json([
            'success' => true,
            'message' => 'Xóa loại mặt hàng thành công!'
        ]);
    }
}
