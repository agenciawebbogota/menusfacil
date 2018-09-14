<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('correo_comprador');
            $table->string('medio_pago');
            $table->string('banco')->nulleble();
            $table->string('ip_transaccion')->nulleble();
            $table->string('id_transaccion')->nulleble();
            $table->string('codigo_referencia')->nulleble();
            $table->string('codigo_respuesta_payu')->nulleble();
            $table->string('mensaje_payu')->nulleble();
            $table->dateTime('fecha_transaccion')->default(date("Y-m-d H:i:s"))->nulleble();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
