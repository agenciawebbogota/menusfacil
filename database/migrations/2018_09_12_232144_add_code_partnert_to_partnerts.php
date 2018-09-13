<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCodePartnertToPartnerts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::table('partnerts', function (Blueprint $table) {
           $table->string('code_partnert', 50)->nullable();
       });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
       Schema::table('partnerts', function (Blueprint $table) {
         $table->dropColumn('code_partnert');
       });
     }
}
