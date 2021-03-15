<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DaftarPelanggan;

class DaftarPelangganController extends Controller
{
    public function index()
    {
        $daftar_pelanggan = DaftarPelanggan::with('diskon')->get();
        return response([
            'success' => true,
            'message' => 'List Semua Pelanggan',
            'data' => $daftar_pelanggan
        ], 200);
    }

    public function create(Request $request)
    {
        $insert_pelanggan = new DaftarPelanggan;
        $insert_pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $insert_pelanggan->alamat = $request->alamat;
        $insert_pelanggan->no_telp = $request->no_telp;
        $insert_pelanggan->diskon_id = $request->diskon_id;
        $insert_pelanggan->save();
        return response([
            'status' => 'OK',
            'message' => 'Data Pelanggan Disimpan',
            'data' => $insert_pelanggan
        ], 200);
    }
    public function update(Request $request, $id)
    {
        $cek_pelanggan = DaftarPelanggan::firstWhere('id', $id);
        if ($cek_pelanggan) {
            $data_pelanggan = DaftarPelanggan::find($id);
            $data_pelanggan->nama_pelanggan = $request->input('nama_pelanggan');
            $data_pelanggan->alamat = $request->input('alamat');
            $data_pelanggan->no_telp = $request->input('no_telp');
            $data_pelanggan->diskon_id = $request->input('diskon_id');
            $data_pelanggan->save();
            return response([
                'status' => 'OK',
                'message' => 'Data Pelanggan Berhasil Diubah',
                'data' => $data_pelanggan
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan',
            ], 404);
        }
    }
    public function delete($id)
    {
        $cek_pelanggan = DaftarPelanggan::firstWhere('id', $id);
        if ($cek_pelanggan) {
            DaftarPelanggan::destroy($id);
            return response([
                'status' => 'OK',
                'message' => 'Data Pelanggan Berhasil Dihapus',
            ], 200);
        } else {
            return response([
                'status' => 'Not Found',
                'message' => 'Data Tidak Ditemukan',
            ], 404);
        }
    }
}
