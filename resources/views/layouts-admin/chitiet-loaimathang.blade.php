@extends('layouts.app')

@section('content')
    <h2>Chi Tiết Loại Mặt Hàng</h2>
    <p><strong>ID:</strong> {{ $loaiMatHang->MaLoaiMatHang }}</p>
    <p><strong>Tên Loại:</strong> {{ $loaiMatHang->TenLoaiMatHang }}</p>
    <p><strong>Ngày Thêm:</strong> {{ $loaiMatHang->ngay_them }}</p>
    <a href="{{ route('loai-mat-hang.index') }}">Quay lại danh sách</a>
@endsection
