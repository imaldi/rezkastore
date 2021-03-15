<?php

namespace App\Http\Controllers;

use App\Models\Diskon;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;

class DiskonController extends Controller
{

    public function index()
    {
        $diskons = Diskon::all();
        return view('pages.diskon_member',['diskons' => $diskons]);
    }

    public function create(Request $request)
    {
        $simpan = DB::table('diskons')->insert([
            'nama_member' => $request->post('addNamaMember'),
            'diskon' => $request->post('diskon'),
            ]); 
            if($simpan){
                Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
            }else{
                Alert::error('data gagal disimpan ', ' Silahkan coba lagi'); }
            return redirect()->back();
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
            $update_diskon = Diskon::findOrFail($id);
            $update_diskon->nama_member = $request->updateNamaMember;
            $update_diskon->diskon = $request->updateDiskon;
            $update_diskon->save();

            if($update_diskon){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$update_diskon){
                Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
            }
            return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('diskons')->where('id',$id)->delete();
        return redirect()->back();
    }
}
