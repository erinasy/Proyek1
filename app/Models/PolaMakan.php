<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PolaMakan extends Model
{
    //use HasFactory;
    public $table = "pola_makan";
    protected $fillable = [
        'id_polaMakan', 'nama_makanan', 'jumlah_kalori','harga','keterangan','photo'
    ];
    protected $primaryKey = 'id_polaMakan';
}
