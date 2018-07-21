<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add4columnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::table('users', function (Blueprint $table) {
            $table->string('url', 50);
            $table->string('color1');
            $table->string('color2');
            $table->string('color3');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('users', function (Blueprint $table) {
            $table->dopColumn('url');
            $table->dopColumn('color1');
            $table->dopColumn('color2');
            $table->dopColumn('color3');
        });
        
    }
}
