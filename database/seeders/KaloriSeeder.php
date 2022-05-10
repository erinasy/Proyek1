<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaloriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('kalori')->insert([
            'id_kalori'=>'1',
            'name'=>'Azizah',
            'berat_badan'=>'70',
            'tinggi_badan'=>'160',
            'umur'=>'20',
            'jenis_kelamin'=>'perempuan',
            'keterangan'=>'',
        ]);
        DB::table('kalori')->insert([
            'id_kalori'=>'2',
            'name'=>'Aldafa',
            'berat_badan'=>'90',
            'tinggi_badan'=>'167',
            'umur'=>'24',
            'jenis_kelamin'=>'laki-laki',
            'keterangan'=>'',
        ]);
        DB::table('kalori')->insert([
            'id_kalori'=>'3',
            'name'=>'Yanti',
            'berat_badan'=>'50',
            'tinggi_badan'=>'150',
            'umur'=>'20',
            'jenis_kelamin'=>'perempuan',
            'keterangan'=>'',
        ]);
    }
}
