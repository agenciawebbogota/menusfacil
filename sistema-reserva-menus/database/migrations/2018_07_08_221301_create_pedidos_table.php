<?php

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
            $table->integer('menu_1')->unsigned();
            $table->integer('menu_2')->unsigned();
            $table->integer('menu_3')->unsigned();
            $table->integer('menu_4')->unsigned();
            $table->integer('menu_5')->unsigned();
            $table->integer('menu_6')->unsigned();
            $table->integer('menu_7')->unsigned();
            $table->integer('menu_8')->unsigned();
            $table->foreign('menu_1')->references('id')->on('menus');
            $table->foreign('menu_2')->references('id')->on('menus');
            $table->foreign('menu_3')->references('id')->on('menus');
            $table->foreign('menu_4')->references('id')->on('menus');
            $table->foreign('menu_5')->references('id')->on('menus');
            $table->foreign('menu_6')->references('id')->on('menus');
            $table->foreign('menu_7')->references('id')->on('menus');
            $table->foreign('menu_8')->references('id')->on('menus');


            $table->integer('adicional_1')->unsigned();
            $table->integer('adicional_2')->unsigned();
            $table->integer('adicional_3')->unsigned();
            $table->integer('adicional_4')->unsigned();
            $table->integer('adicional_5')->unsigned();
            $table->integer('adicional_6')->unsigned();
            $table->integer('adicional_7')->unsigned();
            $table->integer('adicional_8')->unsigned();
            $table->foreign('adicional_1')->references('id')->on('menus');
            $table->foreign('adicional_2')->references('id')->on('menus');
            $table->foreign('adicional_3')->references('id')->on('menus');
            $table->foreign('adicional_4')->references('id')->on('menus');
            $table->foreign('adicional_5')->references('id')->on('menus');
            $table->foreign('adicional_6')->references('id')->on('menus');
            $table->foreign('adicional_7')->references('id')->on('menus');
            $table->foreign('adicional_8')->references('id')->on('menus');
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
