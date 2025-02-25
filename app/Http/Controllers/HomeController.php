<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mathang;
use App\Models\Loaimathang; 


class HomeController extends Controller
{
    public function index()
    {
        // Lấy tất cả mặt hàng
        $allProducts = Mathang::all();

        // Lấy 4 mặt hàng mới nhất
        $newProducts = Mathang::orderBy('ngay_them', 'desc')->take(4)->get();

        $categories = Loaimathang::all(); // Lấy tất cả loại mặt hàng

        return view('home', compact('allProducts', 'newProducts', 'categories'));
    }
}
