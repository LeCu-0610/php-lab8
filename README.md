# PHP Lab 8 - RESTful API với Laravel

## 📋 Mô tả
Project này là bài thực hành Lab 8 môn Lập trình PHP3, triển khai RESTful API sử dụng Laravel framework.

## 🎯 Mục tiêu
- Hiểu về RESTful API của ứng dụng web
- Triển khai RESTful API trong Laravel
- Thực hành CRUD operations với Eloquent ORM
- Sử dụng Eloquent Resources để format dữ liệu API

## 🚀 Tính năng

### 📦 Products API
- **GET** `/api/products` - Lấy danh sách sản phẩm
- **POST** `/api/products` - Tạo sản phẩm mới
- **GET** `/api/products/{id}` - Lấy chi tiết sản phẩm
- **PUT** `/api/products/{id}` - Cập nhật sản phẩm
- **DELETE** `/api/products/{id}` - Xóa sản phẩm

### 🏷️ LoaiSanPham API
- **GET** `/api/loaisanpham` - Lấy danh sách loại sản phẩm
- **POST** `/api/loaisanpham` - Tạo loại sản phẩm mới
- **GET** `/api/loaisanpham/{id}` - Lấy chi tiết loại sản phẩm
- **PUT** `/api/loaisanpham/{id}` - Cập nhật loại sản phẩm
- **DELETE** `/api/loaisanpham/{id}` - Xóa loại sản phẩm

## 🛠️ Cài đặt

### Yêu cầu hệ thống
- PHP >= 8.1
- Composer
- MySQL/MariaDB
- XAMPP (khuyến nghị)

### Bước 1: Clone repository
```bash
git clone https://github.com/LeCu-0610/php-lab8.git
cd php-lab8/la8
```

### Bước 2: Cài đặt dependencies
```bash
composer install
```

### Bước 3: Cấu hình database
1. Tạo database `la8` trong MySQL
2. Copy file `.env.example` thành `.env`
3. Cấu hình database trong file `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=la8
DB_USERNAME=root
DB_PASSWORD=
```

### Bước 4: Chạy migrations và seeders
```bash
php artisan migrate
php artisan db:seed --class=ProductSeeder
php artisan db:seed --class=LoaiSanPhamSeeder
```

### Bước 5: Khởi chạy server
```bash
php artisan serve
```

Server sẽ chạy tại: http://localhost:8000

## 🧪 Test API

### Phương pháp 1: Sử dụng file HTML
Mở file `test_api.html` trong trình duyệt để test với giao diện đẹp.

### Phương pháp 2: Sử dụng PowerShell
```bash
powershell -ExecutionPolicy Bypass -File test_api.ps1
```

### Phương pháp 3: Sử dụng Postman
Import các endpoints vào Postman để test.

### Phương pháp 4: Sử dụng cURL
```bash
# Test GET Products
curl -X GET "http://localhost:8000/api/products" \
  -H "Accept: application/json"

# Test POST Product
curl -X POST "http://localhost:8000/api/products" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Test Product",
    "description": "Test Description",
    "price": 99.99,
    "quantity": 10,
    "image": "test.jpg",
    "is_active": true
  }'
```

## 📊 Cấu trúc Database

### Products Table
- `id` - Primary key
- `name` - Tên sản phẩm
- `description` - Mô tả sản phẩm
- `price` - Giá sản phẩm
- `quantity` - Số lượng
- `image` - Hình ảnh sản phẩm
- `is_active` - Trạng thái hoạt động
- `created_at` - Thời gian tạo
- `updated_at` - Thời gian cập nhật

### LoaiSanPham Table
- `id` - Primary key
- `ten_loai` - Tên loại sản phẩm
- `mo_ta` - Mô tả loại sản phẩm
- `hinh_anh` - Hình ảnh loại sản phẩm
- `trang_thai` - Trạng thái hoạt động
- `created_at` - Thời gian tạo
- `updated_at` - Thời gian cập nhật

## 📁 Cấu trúc Project

```
la8/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── ProductController.php
│   │   │   └── LoaiSanPhamController.php
│   │   └── Resources/
│   │       ├── Product.php
│   │       └── LoaiSanPham.php
│   └── Models/
│       ├── Product.php
│       └── LoaiSanPham.php
├── database/
│   ├── migrations/
│   │   ├── create_products_table.php
│   │   └── create_loaisanpham_table.php
│   └── seeders/
│       ├── ProductSeeder.php
│       └── LoaiSanPhamSeeder.php
├── routes/
│   └── api.php
├── test_api.html
├── test_api.ps1
└── test_api.sh
```

## ✅ Kết quả đạt được

- ✅ RESTful API với Laravel
- ✅ CRUD operations đầy đủ
- ✅ Eloquent Resources
- ✅ Input validation
- ✅ Error handling
- ✅ Database seeding
- ✅ API testing tools

## 👨‍💻 Tác giả
**LeCu-0610**

## 📄 License
MIT License
