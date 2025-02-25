<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.7.2/css/all.min.css">
    <link rel="icon" href="{{ url('img/favicon.png')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <title>SonStore - Admin</title>
    <style>
    </style>
</head>

<body>
    <main class="grid wide row">
        <nav id="navbar" class="col l-2">
            <div id="header--logo">
                <a href="{{ url('/admin') }}"><img class="logo" src="{{ asset('img/Logo-ngang.png') }}" alt="Logo"></a>
            </div>
            <ul>
                <li data-page="thong-ke"><i class="fa-solid fa-chart-pie"></i>Thống kê</li>
                <li data-page="logout-form"><i class="fa-solid fa-wallet"></i>Quản lý tài chính</li>
                <li data-page="nha-cung-cap"><i class="fa-solid fa-briefcase"></i>Quản lý nhà cung cấp</li>
                <li data-page="loai-mat-hang"><i class="fa-solid fa-boxes-packing"></i>Quản lý loại mặt hàng</li>
                <li data-page="mat-hang"><i class="fa-solid fa-box-open"></i>Quản lý mặt hàng</li>
                <li data-page="nhap-hang"><i class="fa-solid fa-store"></i>Quản lý nhập hàng</li>
                <li data-page="don-hang"><i class="fa-solid fa-bag-shopping"></i>Quản lý đơn hàng</li>
                <li data-page="logout-form"><i class="fa-solid fa-shop"></i>Quản lý kho hàng</li>
                <li data-page="logout-form"><i class="fa-solid fa-people-group"></i>Quản lý nhân viên</li>
                <li data-page="gioi-thieu"><i class="fa-solid fa-credit-card"></i>Quản lý giới thiệu</li>
                <li data-page="banner"><i class="fa-solid fa-sliders"></i>Quản lý banner</li>
                <li data-page="logout-form"><i class="fa-solid fa-sign-out-alt"></i>Đăng xuất</li>
            </ul>
        </nav>
        <div id="content" class="col l-11">
            <div id="dynamic-content">
                @include('layouts-admin.welcome')
            </div>
        </div>
    </main>

    <script src="js/admin.js"></script>
</body>
</html>