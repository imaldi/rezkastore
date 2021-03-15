<?php

namespace App\Imports;

use App\Models\Produk;
use Maatwebsite\Excel\Concerns\ToModel;

class ProdukImport implements ToModel
{
    public function model(array $row)
    {
        return new Produk([
            'kode_barang'     => $row[0],
            'jenis_barang'    => $row[1],
            'nama_barang'    => $row[2],
            'tipe'    => $row[3],
            'kategori_id'    => $row[4],
            'stok'    => $row[5],
            'harga'    => $row[6],
            'harga_beli'    => $row[7],
            'keterangan'    => $row[8],
        ]);
    }
}
