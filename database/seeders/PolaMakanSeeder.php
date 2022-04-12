<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PolaMakanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pola_makan')->insert([
            'id_polaMakan'=>'01',
            'nama_makanan'=>'Steak Ayam',
            'jumlah_kalori'=>'2000kkal',
            'harga'=>'Rp.80.000',
            'keterangan'=>'',
            'photo'=>'',
        ]);
        DB::table('pola_makan')->insert([
            'id_polaMakan'=>'02',
            'nama_makanan'=>'Sayur',
            'jumlah_kalori'=>'2000kkal',
            'harga'=>'Rp.70.000',
            'keterangan'=>'',
            'photo'=>'',
        ]);
    }
}
