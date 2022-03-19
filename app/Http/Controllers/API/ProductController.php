<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $categories = $request->input('categories');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if ($id) {
            $product = Product::with(['category'], ['galleries'])->find($id);

            //jika datanya berhasil didapatkan
            if ($product) {
                return ResponseFormatter::success(
                    $product,
                    'Data produk berhasil didapatkan'
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

        $product = Product::with(['category'], ['galleries']);

        // filter nama product
        if ($name) {
            $product->where('name', 'like', '%' . $name . '%');
        }
        // filter description
        if ($description) {
            $product->where('description', 'like', '%' . $description . '%');
        }
        // filter tags
        if ($tags) {
            $product->where('tags', 'like', '%' . $tags . '%');
        }
        // filter harga terendah
        if ($price_from) {
            $product->where('price', '>=', $price_from);
        }
        // filter harga tertinggi
        if ($price_to) {
            $product->where('price', '<=', $price_to);
        }
        // filter categories
        if ($categories) {
            $product->where('categories', $categories);
        }

        // ambil data berdasarkan limit
        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data Product berhasil didapatkan'
        );
    }
}
