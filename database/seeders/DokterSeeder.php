<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokters')->insert([
            'nid'=>'A001',
            'name'=>'Alfina Nur Azizah',
            'jenis_kelamin'=>'perempuan',
            'alamat_dokter'=>'Jln.Anggrek No.98',
            'nomor_telepon'=>'087123456789',
            'email'=>'alfinaNA1@gmail.com',
            'spesialis'=>'GIZI',
        ]);
        DB::table('dokters')->insert([
            'nid'=>'A002',
            'name'=>'Wendha Aldafa P.H',
            'jenis_kelamin'=>'laki-laki',
            'alamat_dokter'=>'Jln.Rambutan No.65',
            'nomor_telepon'=>'08567890123',
            'email'=>'wendha234@gmail.com',
            'spesialis'=>'GIZI',
        ]);
        DB::table('dokters')->insert([
            'nid'=>'A003',
            'name'=>'Erina Seviyanti',
            'jenis_kelamin'=>'perempuan',
            'alamat_dokter'=>'Jln.Mangga No.76',
            'nomor_telepon'=>'08891011121',
            'email'=>'erina5678@gmail.com',
            'spesialis'=>'GIZI',
        ]);
    }
}
