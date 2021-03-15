<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('pages.kelola_barang.kategori',['kategoris' => $kategoris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $simpan = DB::table('kategoris')->insert([
            'nama_kategori' => $request->post('addNamaKategori'),
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
            $update_kategori = Kategori::findOrFail($id);
            $update_kategori->nama_kategori = $request->updateNamaKategori;
            $update_kategori->save();

            if($update_kategori){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$update_kategori){
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
        DB::table('kategoris')->where('id',$id)->delete();
        return redirect()->back();
    }
}
