<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuplaiBarang extends Model
{
    use HasFactory;
    protected $table = "suplai_barangs";
    protected $primaryKey = 'id';
    protected $fillable = [
       'tgl_pembelian',
       'supplier_id',
       'produk_id',
   ];
    public function produk()
    {
        return $this->hasMany(Produk::class,'produk_id');
    }
    public function supplier()
    {
        return $this->belongsTo(DaftarSupplier::class,'supplier_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
