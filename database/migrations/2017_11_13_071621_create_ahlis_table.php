<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAhlisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahlis', function (Blueprint $table) {
            $table->increments('ahli_id');
            $table->integer('noKadPengenalan');
            $table->string('alamatKP');
            $table->string('alamatSekarang');
            $table->string('noTelefonRumah');
            $table->string('noTelefonBimbit');
            $table->string('alamatKadPengenalan');
            $table->string('e-mel');
            $table->string('statusPerkahwinan');
            $table->softDeletes();
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
        Schema::dropIfExists('ahlis');
    }
}
