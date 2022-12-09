<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pengirim');
            $table->string('alamat_pengirim');
            $table->string('nama_penerima');
            $table->string('alamat_penerima');
            $table->string('nama_barang');
            $table->string('berat');
            $table->string('total');
            $table->enum('jenis_pembayaran', ['Cash','Kredit']);
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
        Schema::dropIfExists('barangs');
    }
}
