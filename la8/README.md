# Lab 8 - RESTful API với Laravel

## Mô tả
Dự án này triển khai RESTful API sử dụng Laravel framework với 2 resource chính:
- Products (Sản phẩm)
- LoaiSanPham (Loại sản phẩm)

## Cài đặt và chạy

1. **Cài đặt dependencies:**
```bash
composer install
```

2. **Cấu hình database:**
- Tạo database tên `la8` trong MySQL
- Cấu hình file `.env` với thông tin kết nối database

3. **Chạy migration và seeder:**
```bash
php artisan migrate
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=LoaiSanPhamSeeder
```

4. **Khởi chạy server:**
```bash
php artisan serve
```

## API Endpoints

### Products API
- `GET /api/products` - Lấy danh sách sản phẩm
- `POST /api/products` - Tạo sản phẩm mới
- `GET /api/products/{id}` - Lấy chi tiết sản phẩm
- `PUT /api/products/{id}` - Cập nhật sản phẩm
- `DELETE /api/products/{id}` - Xóa sản phẩm

### LoaiSanPham API
- `GET /api/loaisanpham` - Lấy danh sách loại sản phẩm
- `POST /api/loaisanpham` - Tạo loại sản phẩm mới
- `GET /api/loaisanpham/{id}` - Lấy chi tiết loại sản phẩm
- `PUT /api/loaisanpham/{id}` - Cập nhật loại sản phẩm
- `DELETE /api/loaisanpham/{id}` - Xóa loại sản phẩm

## Cấu trúc dữ liệu

### Products
- `id` - ID sản phẩm
- `name` - Tên sản phẩm
- `description` - Mô tả
- `price` - Giá
- `quantity` - Số lượng
- `image` - Hình ảnh
- `is_active` - Trạng thái hoạt động

### LoaiSanPham
- `id` - ID loại sản phẩm
- `ten_loai` - Tên loại
- `mo_ta` - Mô tả
- `hinh_anh` - Hình ảnh
- `trang_thai` - Trạng thái

## Test với Postman

1. **Tạo sản phẩm mới:**
```
POST http://localhost:8000/api/products
Content-Type: application/json

{
    "name": "iPhone 16",
    "description": "Latest iPhone model",
    "price": 1099.99,
    "quantity": 25,
    "image": "iphone16.jpg",
    "is_active": true
}
```

2. **Lấy danh sách sản phẩm:**
```
GET http://localhost:8000/api/products
```

3. **Cập nhật sản phẩm:**
```
PUT http://localhost:8000/api/products/1
Content-Type: application/json

{
    "name": "iPhone 16 Pro",
    "price": 1199.99
}
```

4. **Xóa sản phẩm:**
```
DELETE http://localhost:8000/api/products/1
```

## Tính năng đã hoàn thành

✅ Cài đặt Laravel project
✅ Tạo database và cấu hình kết nối
✅ Tạo migration cho table products và loaisanpham
✅ Tạo Model với các field fillable
✅ Tạo Eloquent Resource với định dạng thân thiện
✅ Tạo Controller Resource với đầy đủ CRUD operations
✅ Tạo API Routes
✅ Tạo Seeder với dữ liệu mẫu
✅ Validation cho tất cả input
✅ Response format chuẩn JSON
✅ Error handling

## Yêu cầu hệ thống
- PHP 8.1+
- Composer
- MySQL/MariaDB
- Laravel 12
