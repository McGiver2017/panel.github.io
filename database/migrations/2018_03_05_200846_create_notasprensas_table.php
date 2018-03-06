<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotasprensasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notasprensas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->longText('cuerpo');
            $table->string('fecha');
            $table->string('imagen');
            $table->string('ver-mas')->nullable();
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
        Schema::dropIfExists('notasprensas');
    }
}
