<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiMatHang extends Model
{
    use HasFactory;

    protected $table = 'loaimathang'; // Đảm bảo trùng với tên bảng trong MySQL
    protected $primaryKey = 'MaLoaiMatHang'; // Đảm bảo trùng với khóa chính
    protected $fillable = [
        'TenLoaiMatHang',
        'TrangThai',
        'ngay_them',
    ];

    public $timestamps = false; 
}
