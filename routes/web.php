<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MatHangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoaiMatHangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NhaCungCapController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

// Trang chủ
// Route::get('/', function () {
//     return view('home');
// })->middleware('checkUserRole')->name('home');

Route::get('/', [HomeController::class, 'index'])->middleware('checkUserRole')->name('home');

Route::get('/category/{id}', [MatHangController::class, 'showByCategory'])->name('product.category');

// chuyển đến about
Route::middleware(['CheckUserRole'])->group(function () {
    Route::get('/about', function () {
        return view('about');
    });
});

//đăng ký
Route::post('/dang-ky', [AuthController::class, 'register'])->name('register');
Route::post('/dang-nhap', [AuthController::class, 'dangNhap'])->name('dang-nhap');

Route::get('/logout', function () {
    Session::forget('user'); // Xóa session user
    Auth::logout(); // Nếu dùng Auth
    return redirect('/')->with('success', 'Bạn đã đăng xuất thành công!');
})->name('logout');

Route::get('/admin', function () {
    return view('admin');
})->name('admin')->middleware('admin');

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/thong-ke', function () {
        return view('layouts-admin.thong-ke');
    });

    Route::get('/admin/don-hang', function () {
        return view('layouts-admin.don-hang');
    });

    Route::get('/admin/banner', function () {
        return view('layouts-admin.banner');
    });

    Route::get('/admin/gioi-thieu', function () {
        return view('layouts-admin.gioi-thieu');
    });

    Route::get('/admin/loai-mat-hang', function () {
        return view('layouts-admin.loai-mat-hang');
    });

    Route::get('/admin/logout-form', function () {
        return view('layouts-admin.logout-form');
    });

    Route::get('/admin/mat-hang', function () {
        return view('layouts-admin.mat-hang');
    });

    Route::get('/admin/nha-cung-cap', function () {
        return view('layouts-admin/nha-cung-cap');
    });

    Route::get('/admin/nhap-hang', function () {
        return view('layouts-admin/nhap-hang');
    });
});

// Nhóm route dành cho admin
Route::prefix('admin')->group(function () {
    Route::get('/loai-mat-hang', [LoaiMatHangController::class, 'index'])->name('loai-mat-hang.index');
    Route::post('/loai-mat-hang', [LoaiMatHangController::class, 'store'])->name('loai-mat-hang.store');

    Route::get('/mat-hang', [MatHangController::class, 'index'])->name('mat-hang.index');
    Route::post('/mat-hang', [MatHangController::class, 'store'])->name('mat-hang.store');
    
    Route::get('/nha-cung-cap', [NhaCungCapController::class, 'index'])->name('nha-cung-cap.index');
    Route::post('/nha-cung-cap', [NhaCungCapController::class, 'store'])->name('nha-cung-cap.store');
});

