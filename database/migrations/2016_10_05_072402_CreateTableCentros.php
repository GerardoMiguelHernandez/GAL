<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCentros extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros', function (Blueprint $table) {
               $table->increments('id');
               $table->string('nombre',100);
               $table->string('direccion',200)->nullable();
               $table->string('region',100)->nullable();
               $table->string('codigoPostal',100)->nullable();
               $table->string('telefono',100)->nullable();
               $table->string('responsable',100)->nullable();
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

        Schema::drop('centros');
    }
}
