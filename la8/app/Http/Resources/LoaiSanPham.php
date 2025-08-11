<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LoaiSanPham extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'ten_loai' => $this->ten_loai,
            'mo_ta' => $this->mo_ta,
            'hinh_anh' => $this->hinh_anh,
            'trang_thai' => $this->trang_thai ? 'Hoạt động' : 'Không hoạt động',
            'created_at' => $this->created_at->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
