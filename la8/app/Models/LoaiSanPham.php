<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    use HasFactory;

    protected $table = 'loaisanpham';

    protected $fillable = [
        'ten_loai',
        'mo_ta',
        'hinh_anh',
        'trang_thai'
    ];

    protected $casts = [
        'trang_thai' => 'boolean',
    ];
}
