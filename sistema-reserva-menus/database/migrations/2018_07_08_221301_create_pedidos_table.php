->nullable();<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('correo');
            $table->string('direccion');
            $table->string('observaciones');
            $table->integer('menu_pedido')->unsigned();
            $table->integer('adicional_pedido')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('menu_pedido')->references('id')->on('menus');
            $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('adicional_pedido')->references('id')->on('menus');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
