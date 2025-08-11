# Test API - Lab 8 RESTful API
# Chạy script này để test các API endpoints trên Windows

$API_BASE = "http://localhost:8000/api"

Write-Host "🧪 Testing Lab 8 RESTful API" -ForegroundColor Green
Write-Host "================================" -ForegroundColor Green
Write-Host ""

# Test 1: GET Products
Write-Host "1. Testing GET /api/products" -ForegroundColor Yellow
Write-Host "----------------------------" -ForegroundColor Yellow
try {
    $response = Invoke-RestMethod -Uri "$API_BASE/products" -Method GET -Headers @{
        "Accept" = "application/json"
        "Content-Type" = "application/json"
    }
    $response | ConvertTo-Json -Depth 10
} catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
Write-Host ""
Write-Host ""

# Test 2: POST Product
Write-Host "2. Testing POST /api/products" -ForegroundColor Yellow
Write-Host "-----------------------------" -ForegroundColor Yellow
try {
    $productData = @{
        name = "Test Product from PowerShell"
        description = "This is a test product created via PowerShell"
        price = 199.99
        quantity = 25
        image = "test-powershell.jpg"
        is_active = $true
    }
    
    $body = $productData | ConvertTo-Json
    
    $response = Invoke-RestMethod -Uri "$API_BASE/products" -Method POST -Headers @{
        "Accept" = "application/json"
        "Content-Type" = "application/json"
    } -Body $body
    
    $response | ConvertTo-Json -Depth 10
} catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
Write-Host ""
Write-Host ""

# Test 3: GET Product by ID
Write-Host "3. Testing GET /api/products/1" -ForegroundColor Yellow
Write-Host "------------------------------" -ForegroundColor Yellow
try {
    $response = Invoke-RestMethod -Uri "$API_BASE/products/1" -Method GET -Headers @{
        "Accept" = "application/json"
        "Content-Type" = "application/json"
    }
    $response | ConvertTo-Json -Depth 10
} catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
Write-Host ""
Write-Host ""

# Test 4: PUT Product
Write-Host "4. Testing PUT /api/products/1" -ForegroundColor Yellow
Write-Host "------------------------------" -ForegroundColor Yellow
try {
    $updateData = @{
        name = "Updated Product via PowerShell"
        price = 299.99
        is_active = $true
    }
    
    $body = $updateData | ConvertTo-Json
    
    $response = Invoke-RestMethod -Uri "$API_BASE/products/1" -Method PUT -Headers @{
        "Accept" = "application/json"
        "Content-Type" = "application/json"
    } -Body $body
    
    $response | ConvertTo-Json -Depth 10
} catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
Write-Host ""
Write-Host ""

# Test 5: GET LoaiSanPham
Write-Host "5. Testing GET /api/loaisanpham" -ForegroundColor Yellow
Write-Host "-------------------------------" -ForegroundColor Yellow
try {
    $response = Invoke-RestMethod -Uri "$API_BASE/loaisanpham" -Method GET -Headers @{
        "Accept" = "application/json"
        "Content-Type" = "application/json"
    }
    $response | ConvertTo-Json -Depth 10
} catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
Write-Host ""
Write-Host ""

# Test 6: POST LoaiSanPham
Write-Host "6. Testing POST /api/loaisanpham" -ForegroundColor Yellow
Write-Host "--------------------------------" -ForegroundColor Yellow
try {
    $loaiData = @{
        ten_loai = "Test Category from PowerShell"
        mo_ta = "This is a test category created via PowerShell"
        hinh_anh = "test-category-powershell.jpg"
        trang_thai = $true
    }
    
    $body = $loaiData | ConvertTo-Json
    
    $response = Invoke-RestMethod -Uri "$API_BASE/loaisanpham" -Method POST -Headers @{
        "Accept" = "application/json"
        "Content-Type" = "application/json"
    } -Body $body
    
    $response | ConvertTo-Json -Depth 10
} catch {
    Write-Host "Error: $($_.Exception.Message)" -ForegroundColor Red
}
Write-Host ""
Write-Host ""

Write-Host "✅ API Testing completed!" -ForegroundColor Green
Write-Host "Check the responses above to verify all endpoints are working correctly." -ForegroundColor Green
