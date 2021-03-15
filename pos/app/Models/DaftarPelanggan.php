<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApitokens;

class DaftarPelanggan extends Model
{
    use HasFactory, HasApitokens;
    
    protected $table = "daftar_pelanggans";
    protected $primaryKey='id';
    protected $fillable = ['nama_pelanggan','alamat','no_telp','diskon_id'];

    public function diskon(){
    return $this->belongsTo(Diskon::class,'diskon_id')->withDefault([
        'nama_member' => 'Guest',
    ]);
   }

}
