<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\DaftarPelanggan;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Toko;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class TransaksiController extends Controller
{
    public function index()
    {
        $produks = Produk::all()->sortBy('produk_id');
        $daftar_pelanggan = DaftarPelanggan::all();
        $users = User::all();
        $transaksis = Transaksi::all();
        return view('pages.transaksi.penjualan.jualshownew', compact('daftar_pelanggan', 'users', 'produks', 'transaksis'));
    }
    public function transaksiProduk($id)
    {
        $produk = Produk::where('produk_id', '=', $id)
            ->first();

        return response()->json([
                'produk' => $produk,
            ]);
    }

    // Check transaksi Produk
    public function transaksiProdukCek($id)
    {
        $produk_check = Produk::where('produk_id', '=', $id)
            ->count();

        if ($produk_check != 0) {
            $produk = Produk::where('produk_id', '=', $id)
                ->first();
            $check = "tersedia";
        } else {
            $produk = '';
            $check = "tidak tersedia";
        }

        return response()->json([
                'produk' => $produk,
                'check' => $check
            ]);
    }

    // transaksi Process
    public function transaksiProses(Request $req)
    {
        $jml_barang = count($req->produk_id);

        
        for ($i = 0; $i < $jml_barang; $i++) {
            // return $req->kode_transaksi . '#' . $req->produk_id[$i] . '#' .$req->jumlah_barang[$i] . '#' . $req->total_barang[$i] . '#' .$req->subtotal . '#' .$req->diskon .'#' . $req->total . '#' . $req->bayar;
            
            $transaksis = new Transaksi;
            $transaksis->kode_transaksi = $req->kode_transaksi;
            $transaksis->produk_id = $req->produk_id[$i];
            $transaksis->total_barang = $req->jumlah_barang[$i];
            $transaksis->subtotal = $req->total;
            $transaksis->daftar_pelanggan_id = $req->id_pelanggan;
            $transaksis->bayar = $req->bayar;
            $transaksis->kembali = $req->bayar - $req->total;
            $transaksis->user_id = Auth::id();
            //$transaksis->kasir = Auth::user()->nama;
            $transaksis->save();
        }
        
        for ($j = 0; $j < $jml_barang; $j++) {
            $produk = Produk::where('id', '=', $req->produk_id[$j])
                    ->first();
            $produk->stok = $produk->stok - $req->jumlah_barang[$j];
            $produk->save();
            $produk_status = Produk::where('id', '=', $req->produk_id[$j])
                    ->first();
            if ($produk_status->stok > 2) {
                $produk_status->keterangan = 'Tersedia';
                $produk_status->save();
            } elseif ($produk_status->stok != 0) {
                $produk_status->keterangan = 'Hampir Habis';
                $produk_status->save();
            } else {
                $produk_status->keterangan = 'Habis';
                $produk_status->save();
            }
        }
        Session::flash('transaction_success', $req->kode_transaksi);
        return back();
    }

    // Transaction Receipt
    public function transaksiStruk($id)
    {
        $toko = Toko::first();
        $transaksi = Transaksi::where('transaksis.kode_transaksi', '=', $id)
              ->select('transaksis.*')
              ->first();
        /* $transaksis = Transaksi::where('transaksis.kode_transaksi', '=', $id)
                 ->select('transaksis.*')
                 ->get();
*/
        $transaksis = Transaksi::leftJoin('produks', 'produks.id', '=', 'transaksis.produk_id')
                ->where('kode_transaksi', '=', $id)
                ->select('transaksis.*', 'produks.*')
                ->get();
        

       
        // return $transaksi;
        $diskon = $transaksi->subtotal * $transaksi->daftar_pelanggan->diskon->diskon / 100;
        $totalbayar= $transaksi->subtotal - $diskon;
        //$totalbayarbarang= $transaksi->total_barang * $transaksis->produks->harga;

        
      

        $customPaper = array(0,0,450.00,283.80);
        $pdf = PDF::loadview('pages.transaksi.penjualan.struk', compact('transaksi', 'transaksis', 'diskon', 'toko', 'totalbayar'))->setPaper($customPaper, 'landscape');
        return $pdf->stream();
        //return  $transaksi .'<br><br><br>'. $transaksis;
    }

    public function rekappenjualan()
    {
        $transaksis = Transaksi::all();
        return view('pages.rekapan.penjualan', compact('transaksis'));
    }
}
