#!/bin/bash

# Test API - Lab 8 RESTful API
# Chạy script này để test các API endpoints

API_BASE="http://localhost:8000/api"

echo "🧪 Testing Lab 8 RESTful API"
echo "================================"
echo ""

# Test 1: GET Products
echo "1. Testing GET /api/products"
echo "----------------------------"
curl -X GET "$API_BASE/products" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json"
echo ""
echo ""

# Test 2: POST Product
echo "2. Testing POST /api/products"
echo "-----------------------------"
curl -X POST "$API_BASE/products" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Test Product from cURL",
    "description": "This is a test product created via cURL",
    "price": 199.99,
    "quantity": 25,
    "image": "test-curl.jpg",
    "is_active": true
  }'
echo ""
echo ""

# Test 3: GET Product by ID
echo "3. Testing GET /api/products/1"
echo "------------------------------"
curl -X GET "$API_BASE/products/1" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json"
echo ""
echo ""

# Test 4: PUT Product
echo "4. Testing PUT /api/products/1"
echo "------------------------------"
curl -X PUT "$API_BASE/products/1" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "name": "Updated Product via cURL",
    "price": 299.99,
    "is_active": true
  }'
echo ""
echo ""

# Test 5: GET LoaiSanPham
echo "5. Testing GET /api/loaisanpham"
echo "-------------------------------"
curl -X GET "$API_BASE/loaisanpham" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json"
echo ""
echo ""

# Test 6: POST LoaiSanPham
echo "6. Testing POST /api/loaisanpham"
echo "--------------------------------"
curl -X POST "$API_BASE/loaisanpham" \
  -H "Accept: application/json" \
  -H "Content-Type: application/json" \
  -d '{
    "ten_loai": "Test Category from cURL",
    "mo_ta": "This is a test category created via cURL",
    "hinh_anh": "test-category-curl.jpg",
    "trang_thai": true
  }'
echo ""
echo ""

echo "✅ API Testing completed!"
echo "Check the responses above to verify all endpoints are working correctly."
