<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelKalori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kalori', function (Blueprint $table) {
            $table->String('id_kalori');
            $table->String('name');
            $table->String('berat_badan',100);
            $table->String('tinggi_badan',50);
            $table->String('umur');
            $table->String('jenis_kelamin');
            $table->String('keterangan',250);
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kalori');
    }
}
