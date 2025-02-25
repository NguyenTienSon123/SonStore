@extends('layouts.app')

@section('content')
    <h2>Danh mục: {{ $category->TenLoai}}</h2>

    <div class="product">
        @if ($products->isEmpty())
            <p>Không có sản phẩm nào trong danh mục này.</p>
        @else
            @foreach ($products as $product)
                <div class="product-item">
                    <img src="{{ asset('storage/' . $product->Anh) }}" alt="{{ $product->TenMatHang }}">
                    <h3>{{ $product->TenMatHang }}</h3>
                    <p>{{ number_format($product->Gia, 0, ',', '.') }} VNĐ</p>
                </div>
            @endforeach
        @endif
    </div>
@endsection
