<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lojas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->unsignedBigInteger('dono');
            $table->string('nome');
            $table->string('descricao');
            $table->string('telefone');
            $table->string('telefone_2');
            $table->string('abreviacao');
            $table->timestamps();
            $table->foreign('dono')->references('id')->on('usuarios');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
