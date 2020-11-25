<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblalatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblalat', function (Blueprint $table) {
            $table->id();
            $table->string("nama_alat",50);
            $table->unsignedBigInteger("id_ukm");
            $table->foreign("id_ukm")->references("id")->on("tblukm");
            $table->string("merk",50);
            $table->string("warna",20);
            $table->string("jumlah",50);
            $table->string("keterangan",100);
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
        Schema::dropIfExists('tblalat');
    }
}
