<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', 'App\Http\Controllers\Auth\AuthController@register');
Route::post('auth/login', 'App\Http\Controllers\Auth\AuthController@login');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('auth/me', 'App\Http\Controllers\Auth\AuthController@me');
    Route::post('auth/logout', 'App\Http\Controllers\Auth\AuthController@logout');
    Route::get('/daftar_pelanggan', 'App\Http\Controllers\API\DaftarPelangganController@index');
    Route::post('/daftar_pelanggan/create', 'App\Http\Controllers\API\DaftarPelangganController@create');
    Route::put('/daftar_pelanggan/update/{id}', 'App\Http\Controllers\API\DaftarPelangganController@update');
    Route::delete('/daftar_pelanggan/delete/{id}', 'App\Http\Controllers\API\DaftarPelangganController@delete');
    Route::get('/produk', 'App\Http\Controllers\API\ProdukController@index');
    Route::get('/produk/{id}', 'App\Http\Controllers\API\ProdukController@show');
    Route::get('/transaksi', 'App\Http\Controllers\API\TransaksiController@index');
    Route::get('/transaksi/{id}', 'App\Http\Controllers\API\TransaksiController@show');
});
