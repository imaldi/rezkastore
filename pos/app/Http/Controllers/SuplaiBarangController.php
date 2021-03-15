<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use App\Models\SuplaiBarang;
use App\Models\DaftarSupplier;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class SuplaiBarangController extends Controller
{

    public function index()
    {
        $suplai_barangs = SuplaiBarang::all();
        $produks = Produk::all();
        $users = User::all();
        $array = array();
        foreach ($suplai_barangs as $no => $supply) {
            array_push($array, $suplai_barangs[$no]->created_at->toDateString());
        }
        $dates = array_unique($array);
        rsort($dates);

        return view('pages.transaksi.suplai_barang.suplaishow',compact('suplai_barangs','users','produks','dates'));
    }

    public function create(Request $request)
    {
        
    }

    
    
    public function viewnew()
    
    {
        $suppliers= DaftarSupplier::all();
        $produks = Produk::all()
            ->sortBy('kode_barang');

        return view('pages.transaksi.suplai_barang.new_suplai',compact('produks','suppliers'));
    }

    public function statistikSuplai()
    
    {
        $suppliers= DaftarSupplier::all();
        $produks = Produk::all()
            ->sortBy('kode_barang');

        return view('pages.transaksi.suplai_barang.statistik_suplai',compact('produks','suppliers'));
    }
   
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
            $update_produk = Produk::findOrFail($id);
            $update_produk->kode_barang = $request->kode_barang;
            $update_produk->nama_barang= $request->nama_barang;
            $update_produk->jenis_barang = $request->jenis_barang;
            $update_produk->tipe= $request->tipe;
            $update_produk->stok = $request->stok;
            $update_produk->harga= $request->harga;
            $update_produk->kategori_id = $request->kategori_id;
            $update_produk->save();

            if($update_produk){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$update_produk){
                Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
            }
            return redirect()->back();
    }


    public function delete($id)
    {
        DB::table('suplai_barangs')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function notif($id){
        
    }

}
