<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolaMakan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pola_makan', function (Blueprint $table) {
            $table->String('id_polaMakan');
            $table->String('nama_makanan',100);
            $table->String('jumlah_kalori',50);
            $table->String('harga');
            $table->String('keterangan',250);
            $table->String('photo');
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
        Schema::dropIfExists('pola_makan');
    }
}
