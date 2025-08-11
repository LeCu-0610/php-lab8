<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\LoaiSanPham;
use App\Http\Resources\LoaiSanPham as LoaiSanPhamResource;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $loaiSanPhams = LoaiSanPham::all();
        return response()->json([
            'success' => true,
            'data' => LoaiSanPhamResource::collection($loaiSanPhams)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'ten_loai' => 'required|string|max:255',
            'mo_ta' => 'nullable|string',
            'hinh_anh' => 'nullable|string|max:255',
            'trang_thai' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $loaiSanPham = LoaiSanPham::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Loại sản phẩm đã được tạo thành công',
            'data' => new LoaiSanPhamResource($loaiSanPham)
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(LoaiSanPham $loaiSanPham): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => new LoaiSanPhamResource($loaiSanPham)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LoaiSanPham $loaiSanPham): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'ten_loai' => 'required|string|max:255',
            'mo_ta' => 'nullable|string',
            'hinh_anh' => 'nullable|string|max:255',
            'trang_thai' => 'boolean'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors',
                'errors' => $validator->errors()
            ], 422);
        }

        $loaiSanPham->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Loại sản phẩm đã được cập nhật thành công',
            'data' => new LoaiSanPhamResource($loaiSanPham)
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoaiSanPham $loaiSanPham): JsonResponse
    {
        $loaiSanPham->delete();

        return response()->json([
            'success' => true,
            'message' => 'Loại sản phẩm đã được xóa thành công'
        ]);
    }
}
