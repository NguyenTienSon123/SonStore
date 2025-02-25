<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatHang extends Model
{
    use HasFactory;
    protected $table = 'mathang';
    protected $primaryKey = 'MaMatHang';
    public $timestamps = false;
    protected $fillable = ['TenMatHang', 'MaLoaiMatHang', 'Gia', 'TrangThai', 'MoTa', 'Anh', 'ngay_them', 'SoLuongTon'];
    public function loaiMatHang()
    {
        return $this->belongsTo(LoaiMatHang::class, 'MaLoaiMatHang');
    }
}
