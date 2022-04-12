<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    //use HasFactory;
    public $table = "dokters";
    protected $fillable = ['nid', 'name', 'jenis_kelamin','alamat_dokter','nomor_telepon','email','spesialis'];
    protected $primaryKey = 'nid';
}