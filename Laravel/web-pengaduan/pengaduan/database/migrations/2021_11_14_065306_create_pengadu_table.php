<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengadu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('nik_pengadu');
            $table->string('nama_pengadu');
            $table->string('kategori_pengadu');
            $table->string('alamat_pengadu');
            $table->string('telepon_pengadu');
            $table->string('email_pengadu');
            $table->string('avatar_pengadu');
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
        Schema::dropIfExists('pengadu');
    }
}
