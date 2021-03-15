<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use RegistersUsers;

    public function index()
    {
        $daftar_user = User::all();
        return view('pages.kelola_akun',compact('daftar_user'));
    }


    public function update(Request $request, $id)
    {
            $update_user = User::findOrFail($id);
            $update_user->nama_user = $request->updateNamauser;
            $update_user->username = $request->updateUsername;
            $update_user->email = $request->updateEmail;
            $update_user->alamat = $request->updateAlamat;
            $update_user->no_telp = $request->updateNoTelp;
            $update_user->role = $request->updateRole;
            $update_user->save();
            

            if($update_user){
                Alert::success(' Berhasil Update Data ', ' Silahkan dicek kembali');
            }elseif(!$update_user){
                Alert::error('data gagal disimpan ', ' Silahkan coba lagi');
            }
            return redirect()->back();}

    public function create(Request $request)
    {
        $simpan = DB::table('users')->insert([
                    'nama_user' => $request->post('addNamauser'),
                    'username' => $request->post('addUsername'),
                    'email'=> $request->post('addEmail'),
                    'alamat'=> $request->post('addAlamat'),
                    'no_telp'=> $request->post('addNoTelp'),
                    'password'=>Hash::make($request->post('addPassword')) ,
                    'role'=> $request->post('addRole'),
        ]); 
        
         if($simpan){
            Alert::success(' Berhasil Tambah data ', ' Silahkan dicek kembali');
        }else{
            Alert::error('data gagal disimpan ', ' Silahkan coba lagi'); }
        return redirect()->back();}

    public function delete($id)
    {
        DB::table('users')->where('id',$id)->delete();
        return redirect()->back();
    }
}
