<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpengadaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpengadaan', function (Blueprint $table) {
            $table->id();
            $table->date("tanggal-diajukan");
            $table->date("tanggal-disetujui");
            $table->unsignedBigInteger("id_alat");
            $table->foreign("id_alat")->references("id")->on("tblalat");
            $table->string("jumlah",50);
            $table->string("keterangan",50);
            $table->unsignedBigInteger("id_petugas");
            $table->foreign("id_petugas")->references("id")->on("tblpetugas");
            $table->string("status",50);
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
        Schema::dropIfExists('tblpengadaan');
    }
}
