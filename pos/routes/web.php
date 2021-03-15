<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Auth::routes();

//Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
    Route::get('dashboard', 'App\Http\Controllers\ViewManageController@viewDashboard')->name('dashboard');
    //daftar_pelanggan
    Route::get('daftar_pelanggan', '\App\Http\Controllers\DaftarPelangganController@index')->name('daftar_pelanggan');
    Route::post('daftar_pelanggan/create', '\App\Http\Controllers\DaftarPelangganController@create')->name('daftar_pelanggan.create');
    Route::delete('daftar_pelanggan/delete/{id}', '\App\Http\Controllers\DaftarPelangganController@delete')->name('daftar_pelanggan.delete');
    Route::put('daftar_pelanggan/update/{id}', '\App\Http\Controllers\DaftarPelangganController@update')->name('daftar_pelanggan.update');
    //Kategori
    Route::get('kategori', '\App\Http\Controllers\KategoriController@index')->name('kategori')->middleware('superadmin');
    Route::post('kategori/create', '\App\Http\Controllers\KategoriController@create')->name('kategori.create')->middleware('superadmin');
    Route::delete('kategori/delete/{id}', '\App\Http\Controllers\KategoriController@delete')->name('kategori.delete')->middleware('superadmin');
    Route::put('kategori/update/{id}', '\App\Http\Controllers\KategoriController@update')->name('kategori.update')->middleware('superadmin');
    //Produk
    Route::get('daftar_produk', '\App\Http\Controllers\ProdukController@index')->name('daftar_produk');
    Route::get('daftar_produk/notif', '\App\Http\Controllers\ProdukController@notif')->name('daftar_produk.notif');
    Route::get('daftar_produk/cetakprodukhabis', '\App\Http\Controllers\ProdukController@cetakProdukHabis')->name('daftar_produk.notifhabis');
    Route::post('daftar_produk/imporproduk', '\App\Http\Controllers\ProdukController@imporproduk')->name('daftar_produk.impor');
    Route::post('daftar_produk/create', '\App\Http\Controllers\ProdukController@create')->name('daftar_produk.create')->middleware('superadmin');
    Route::delete('daftar_produk/delete/{id}', '\App\Http\Controllers\ProdukController@delete')->name('daftar_produk.delete')->middleware('superadmin');
    Route::put('daftar_produk/update/{id}', '\App\Http\Controllers\ProdukController@update')->name('daftar_produk.update')->middleware('superadmin');
    //User
    Route::get('daftar_user', '\App\Http\Controllers\UserController@index')->name('daftar_user')->middleware('superadmin');
    Route::post('daftar_user/create', '\App\Http\Controllers\UserController@create')->name('daftar_user.create')->middleware('superadmin');
    Route::delete('daftar_user/delete/{id}', '\App\Http\Controllers\UserController@delete')->name('daftar_user.delete')->middleware('superadmin');
    Route::put('daftar_user/update/{id}', '\App\Http\Controllers\UserController@update')->name('daftar_user.update')->middleware('superadmin');
    //Diskon
    Route::get('diskon', '\App\Http\Controllers\DiskonController@index')->name('diskon')->middleware('superadmin');
    Route::post('diskon/create', '\App\Http\Controllers\DiskonController@create')->name('diskon.create')->middleware('superadmin');
    Route::delete('diskon/delete/{id}', '\App\Http\Controllers\DiskonController@delete')->name('diskon.delete')->middleware('superadmin');
    Route::put('diskon/update/{id}', '\App\Http\Controllers\DiskonController@update')->name('diskon.update')->middleware('superadmin');
        //transaksi
    Route::get('transaksi', '\App\Http\Controllers\TransaksiController@index')->name('transaksi');
    Route::get('/transaksi/produk/{id}', '\App\Http\Controllers\TransaksiController@transaksiProduk')->name('transaksi.produk');
    Route::get('/transaksi/produk/cek/{id}', '\App\Http\Controllers\TransaksiController@transaksiProdukCek')->name('transaksi.produkcek');
    Route::post('/transaksi/proses', '\App\Http\Controllers\TransaksiController@transaksiProses')->name('transaksi.proses');
    Route::get('/transaksi/struk/{id}', '\App\Http\Controllers\TransaksiController@transaksiStruk')->name('transaksi.struk');
    //rekapan transaksi
    Route::get('rekapan/penjualan', '\App\Http\Controllers\TransaksiController@rekappenjualan')->name('rekap.penjualan');
    Route::get('rekapan/pembelian', '\App\Http\Controllers\TransaksiController@rekappembelian')->name('rekap.pembelian');
    Route::get('rekapan/penjualan/cetak', '\App\Http\Controllers\SuplaiBarangController@cetakpenjualan')->name('rekap.penjualan_cetak');
    Route::get('rekapan/pembelian/cetak', '\App\Http\Controllers\SuplaiBarangController@cetakpembelian')->name('rekap.pembelian_cetak');
});
