<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarSupplier extends Model
{
    use HasFactory;
    protected $table = "suppliers";
    protected $primaryKey = 'id';
    protected $fillable = [
       'nama_supplier',
       'alamat',
       'no_telp',
       'email',
   ];
}
