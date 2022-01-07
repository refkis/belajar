<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_tables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('aduan_id')
                    ->references('id')->on('aduan')
                    ->onDelete('cascade');
                    
                    $table->string('kategori_status');
                    $table->string('isi_status');
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
        Schema::dropIfExists('status_tables');
    }
}
