<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return response([
            'success' => true,
            'message' => 'List Semua Produk',
            'data' => $produks
        ], 200);
    }
    public function show($id)
    {
        $produks = Produk::where('produks.kode_barang', '=', $id)
        ->select('produks.*')
        ->first();

        if ($produks) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Produk',
                'data' => $produks
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Produk Tidak ditemukan',
                'data' => ''
            ], 401);
        }
    }
}
