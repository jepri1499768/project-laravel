<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblpetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpetugas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_ukm");
            $table->foreign("id_ukm")->references("id")->on("tblukm");
            $table->string("nama",100);
            $table->string("alamat",100);
            $table->string("telepon",15);
            $table->string("password",50);
            $table->string("aktif",10);
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
        Schema::dropIfExists('tblpetugas');
    }
}
