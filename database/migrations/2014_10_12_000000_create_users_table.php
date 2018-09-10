<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('url', 50);
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
            $table->string('estado_empresa')->default('GRATIS'); //PAGA
            $table->string('tipo_usuario')->default('EMPRESA'); //SUPERUSUARIO
            $table->string('bloqueado')->default('NO'); // SI
            $table->integer('dias')->default(14)->nulleble();
            $table->unsignedInteger('partnert_id');
            $table->dateTime('fecha_creacion')->default(date("Y-m-d H:i:s"))->nulleble();
            $table->string('cabecera')->default('http://www.menusfacil.com/admin/img/logo-menusfacil.svg')->nulleble();
            $table->string('perfil')->default('http://www.menusfacil.com/img/logo2.png')->nulleble();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
