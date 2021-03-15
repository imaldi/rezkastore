<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $produks = Transaksi::with('daftar_pelanggan')->get();
        return response([
            'success' => true,
            'message' => 'List Semua Transaksi',
            'data' => $produks
        ], 200);
    }
    public function show($id)
    {
        $produks = Transaksi::where('transaksis.kode_transaksi', '=', $id)
        ->select('transaksis.*')
        ->first();

        if ($produks) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Transaksi',
                'data' => $produks
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Transaksi Tidak ditemukan',
                'data' => ''
            ], 401);
        }
    }
}
