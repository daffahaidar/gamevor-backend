<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;

class ProductCategoryController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $show_product = $request->input('show_product');

        if ($id) {
            $category = ProductCategory::with(['products'])->find($id);

            //jika datanya berhasil didapatkan
            if ($category) {
                return ResponseFormatter::success(
                    $category,
                    'Data kategori berhasil didapatkan'
                );
            }

            //jika datanya gagal didapatkan
            else {
                return ResponseFormatter::error(
                    null,
                    'Tidak ditemukan!',
                    404
                );
            }
        }
        $category = ProductCategory::query();

        // filter nama product
        if ($name) {
            $category->where('name', 'like', '%' . $name . '%');
        }

        if ($show_product) {
            $category->with('products');
        }

        // ambil data berdasarkan limit
        return ResponseFormatter::success(
            $category->paginate($limit),
            'Data kategori berhasil didapatkan'
        );
    }
}
