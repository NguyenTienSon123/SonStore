<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ url('img/favicon.png')}}">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.7.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>SonStore - Home</title>
</head>

<body>
    @include('layouts.header')
    <div id="banner2" class="grid wide row"></div>
    <div id="banner">
        <div class="grid wide">
            <div class="col l-12">
                <div class="slideshow">
                    <div class="list-img">
                        <img src="img/Banner/Beige Colorful Computer Class Google Classroom Header (1).png" alt="">
                        <img src="img/Banner/Beige Colorful Computer Class Google Classroom Header (2).png" alt="">
                        <img src="img/Banner/Beige Colorful Computer Class Google Classroom Header.png" alt="">
                    </div>
                    <div class="btn-next">
                        <i class="fa-solid fa-angle-left"></i>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>
                    <div class="index-image">
                        <div class="index-item index-item-0 active"></div>
                        <div class="index-item index-item-1"></div>
                        <div class="index-item index-item-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal">
        <div id="sidebar">
            <div class="grid row">
                <div class="exit">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="category">
                    <h1>Danh mục</h1>
                    <ul class="row">
                        @foreach ($categories as $category)
                        <li class="col l-3">
                            <a href="{{ route('product.category', ['id' => $category->MaLoaiMatHang]) }}">
                                {{ $category->TenLoaiMatHang }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <div id="content">
        <div id="newproduct" class="grid wide row">
            <h1 class="title grid wide">Sản phẩm mới</h1>
            @foreach ($newProducts as $product)
            <div class="col l-3">
                <div class="product">
                    <div class="product-child">
                        <img src="{{ asset('storage/' . $product->Anh) }}" alt="{{ $product->TenMatHang }}">
                        <h2>{{ $product->TenMatHang }}</h2>
                        <p>{{ number_format($product->Gia, 0, ',', '.') }}đ</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div id="allproduct" class="grid wide row">
            <h1 class="title grid wide">Có thể bạn thích</h1>
            @foreach ($allProducts as $product)
            <div class="col l-3">
                <div class="product">
                    <div class="product-child">
                        <img src="{{ asset('storage/' . $product->Anh) }}" alt="{{ $product->TenMatHang }}">
                        <h2>{{ $product->TenMatHang }}</h2>
                        <p>{{ number_format($product->Gia, 0, ',', '.') }}đ</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
    <script src="js/main.js"></script>
</body>

</html>