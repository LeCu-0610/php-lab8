<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LoaiSanPham;

class LoaiSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LoaiSanPham::create([
            'ten_loai' => 'Điện thoại',
            'mo_ta' => 'Các loại điện thoại di động',
            'hinh_anh' => 'dien-thoai.jpg',
            'trang_thai' => true,
        ]);

        LoaiSanPham::create([
            'ten_loai' => 'Laptop',
            'mo_ta' => 'Máy tính xách tay',
            'hinh_anh' => 'laptop.jpg',
            'trang_thai' => true,
        ]);

        LoaiSanPham::create([
            'ten_loai' => 'Máy tính bảng',
            'mo_ta' => 'Tablet và iPad',
            'hinh_anh' => 'tablet.jpg',
            'trang_thai' => true,
        ]);

        LoaiSanPham::create([
            'ten_loai' => 'Phụ kiện',
            'mo_ta' => 'Các loại phụ kiện điện tử',
            'hinh_anh' => 'phu-kien.jpg',
            'trang_thai' => true,
        ]);
    }
}
