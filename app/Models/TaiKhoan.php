<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TaiKhoan extends Authenticatable
{
    use HasFactory;

    protected $table = 'taikhoan';
    protected $primaryKey = 'MaTaiKhoan';
    public $timestamps = false;

    protected $fillable = [
        'HoVaTen', 'gmail', 'MatKhau', 'SoDienThoai', 'DiaChi', 'Avata', 'Role', 'TrangThai'
    ];

    // Laravel mặc định sử dụng `password`, ta cần chỉ định lại
    protected $hidden = ['MatKhau'];

    public function getAuthPassword()
    {
        return $this->MatKhau;
    }

    public function getAuthIdentifierName()
    {
        return 'gmail'; // Laravel sẽ dùng trường `gmail` để xác thực
    }

}
