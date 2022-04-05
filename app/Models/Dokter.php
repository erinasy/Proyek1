<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //use HasFactory;
    protected $fillable = ['nid', 'name', 'jenis_kelamin','alamat_dokter','nomor_telepon','email','spesialis'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}