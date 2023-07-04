<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('merek_id');
            $table->integer('tahun');
            $table->integer('jml_kursi');
            $table->string('jenis_bbm');
            $table->text('ket_lain');
            $table->string('harga_sewa');
            $table->string('tgl_sewa')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('status');
            $table->string('gambar');
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
        Schema::dropIfExists('mobils');
    }
};
