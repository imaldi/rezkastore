<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $fillable = ['bayar','daftar_pelanggan_id'];
    public function produk()
    {
        return $this->hasMany(Produk::class, 'produk_id');
    }
    public function daftar_pelanggan()
    {
        return $this->belongsTo(DaftarPelanggan::class, 'daftar_pelanggan_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
