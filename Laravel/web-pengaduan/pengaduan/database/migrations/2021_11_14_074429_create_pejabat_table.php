<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePejabatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pejabat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('nip_pejabat');
            $table->string('nama_pejabat');
            $table->string('telepon_pejabat');
            $table->string('email_pejabat');
            $table->string('avatar_pejabat');
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
        Schema::dropIfExists('pejabat');
    }
}
