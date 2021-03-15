<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Barryvdh\DomPDF\Facade as PDF;
use App\Imports\ProdukImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        $kategoris = Kategori::all();
        return view('pages.kelola_barang.daftar_barang',compact('produks','kategoris'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'stok' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        $cek_produk = Produk::where('kode_barang', $request->kode_barang)->count();
        if ($cek_produk == 0) {
            $produk = new Produk;
            $produk->kode_barang = $request->kode_barang;
            $produk->nama_barang = $request->nama_barang;
            $produk->jenis_barang = $request->jenis_barang;
            $produk->tipe = $request->tipe;
            $produk->stok = $request->stok;
            $produk->harga = $request->harga;
            $produk->harga_beli = $request->harga_beli;
            $produk->kategori_id = $request->kategori_id;
            if ($request->stok > 2) {
                $produk->keterangan = "Tersedia";
            } elseif ($request->stok != 0) {
                $produk->keterangan = "Hampir Habis";
            } else {
                $produk->keterangan = "Habis";
            }
            $produk->save();
            Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
            return redirect()->back();
        }else{
            Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
            return redirect()->back();
         }
            
    }

    
    public function store()
    {
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
            $update_produk->harga_beli= $request->harga_beli;
            $update_produk->kategori_id = $request->kategori_id;
            if($request->stok > 2)
            {
                $update_produk->keterangan = "Tersedia";
            }elseif($request->stok != 0){
                $update_produk->keterangan = "Hampir Habis";
            }else{
                $update_produk->keterangan = "Habis";
            }
            $update_produk->save();

            if($update_produk){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$update_produk){
                Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
            }
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('produks')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function notif(){
        return view('pages.kelola_barang.barang_notif');   
    }
    public function cetakProdukHabis(){
        $produks = Produk::all();
	    $pdf = PDF::loadview('pages.kelola_barang.produk_habis_pdf',compact('produks'));
	    return $pdf->download('laporan-dataprodukhabis-pdf');
    }
    public function imporproduk(Request $request){
       // validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
		// menangkap file excel
		$file = $request->file('file');
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
		// upload ke folder file_produk di dalam folder public
		$file->move('file_produk/',$nama_file);
		// import data
		Excel::import(new ProdukImport, 'file_produk/'.$nama_file);
		// notifikasi dengan session
		Alert::success('sukses','Data produk Berhasil Diimport!');

		// alihkan halaman kembali
        return redirect()->back();

    }

}
