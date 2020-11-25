<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpeminjaman', function (Blueprint $table) {
            $table->id();
            $table->date("tanggal_peminjam",50);
            $table->date("tanggal_kembali",50);
            $table->string("id_alat",100);
            $table->string("jumlah",100);
            $table->string("id_peminjam",100);
            $table->unsignedBigInteger("id_ukm");
            $table->foreign("id_ukm")->references("id")->on("tblukm");
            $table->string("status",100);
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
        Schema::dropIfExists('tblpeminjaman');
    }
}
