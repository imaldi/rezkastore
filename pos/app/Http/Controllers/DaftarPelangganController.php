<?php

namespace App\Http\Controllers;

use App\Models\DaftarPelanggan;
use App\Models\Diskon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarPelangganController extends Controller
{

    public function index()
    {
        $daftar_pelanggan = DaftarPelanggan::with('diskon')->get();
        $diskons = Diskon::all();
        $diskons = Diskon::select('id', 'nama_member')->get();
        return view('pages.daftar_pelanggan',compact('daftar_pelanggan','diskons'));   
    }


    public function update(Request $request, $id)
    {
            $daftar_pelanggan = DaftarPelanggan::findOrFail($id);
            $daftar_pelanggan->nama_pelanggan = $request->updateNamaPelanggan;
            $daftar_pelanggan->alamat = $request->updateAlamat;
            $daftar_pelanggan->no_telp = $request->updateNoTelp;
            $daftar_pelanggan->diskon_id = $request->updateDiskonid;
            $daftar_pelanggan->save();
            

            if($daftar_pelanggan){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$daftar_pelanggan){
                Alert::error('Data Sudah Ada', ' Silahkan coba lagi');
            }
            return redirect()->back();}

    public function create(Request $request)
    {
        $simpan = DB::table('daftar_pelanggans')->insert([
                    'nama_pelanggan' => $request->post('addNamaPelanggan'),
                    'alamat'=> $request->post('addAlamat'),
                    'no_telp'=> $request->post('addNoTelp'),
                    'diskon_id' => $request ->post('AddDiskonid')
        ]); 
        
         if($simpan){
            Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
        }else{
            Alert::error('data gagal disimpan ', ' Silahkan coba lagi'); }
        return redirect()->back();}

    public function delete($id)
    {
        DB::table('daftar_pelanggans')->where('id',$id)->delete();
        return redirect()->back();
    }
}
