<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajedocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajedocs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dni');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('correo');
            $table->string('tipo');
            $table->string('tipo_usuario');
            $table->string('tipo_incidencia');
            $table->string('detalle',250);
            $table->enum('estado',['enviado','leido','respondido'])->default('enviado');
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
        Schema::dropIfExists('mensajedocs');
    }
}
