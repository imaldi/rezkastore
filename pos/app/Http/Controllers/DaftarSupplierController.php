<?php

namespace App\Http\Controllers;

use App\Models\DaftarSupplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DaftarSupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftar_suppliers = DaftarSupplier::all();
        return view('pages.daftar_supplier',['daftar_suppliers' => $daftar_suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $simpan = DB::table('suppliers')->insert([
            'nama_supplier' => $request->post('addNamaSupplier'),
            'alamat'=> $request->post('addAlamat'),
            'no_telp'=> $request->post('addNoTelp'),
            'email'=> $request->post('addEmail'),
            ]); 
            if($simpan){
                Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
            }else{
                Alert::error('data gagal disimpan ', ' Silahkan coba lagi'); }
            return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $update_supplier = DaftarSupplier::findOrFail($id);
            $update_supplier->nama_supplier = $request->updateNamaSupplier;
            $update_supplier->alamat = $request->updateAlamat;
            $update_supplier->no_telp = $request->updateNoTelp;
            $update_supplier->email = $request->updateEmail;
            $update_supplier->save();

            if($update_supplier){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$update_supplier){
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
        DB::table('suppliers')->where('id',$id)->delete();
        return redirect()->back();
    }
}
