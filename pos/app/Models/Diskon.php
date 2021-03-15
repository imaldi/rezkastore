<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_member','diskon',
    ];
    public function daftar_pelanggan()
    {
        return $this->hasMany(Daftar::class);
    }
}
