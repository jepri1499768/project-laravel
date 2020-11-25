<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpinjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpinjaman', function (Blueprint $table) {
            $table->id();
            $table->string("id_peminjam",50);
            $table->unsignedBigInteger("id_ukm");
            $table->foreign("id_ukm")->references("id")->on("tblukm");
            $table->date("alamat",50);
            $table->date("telepon",50);
            $table->date("organisasi",50);
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
        Schema::dropIfExists('tblpinjaman');
    }
}
