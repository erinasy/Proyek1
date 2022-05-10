<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalori extends Model
{
    //use HasFactory;
    public $table = "kalori";
    protected $fillable = ['id_kalori', 'name', 'berat_badan','tinggi_badan','umur','jenis_kelamin','keterangan'];
    protected $primaryKey = 'id_kalori';
}
