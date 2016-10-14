<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->date('fecha');
		    $table->string('lugar');
            $table->string('descripcion')->nullable();
            $table->string('imagen');
            $table->integer('centroOrganizador')->unsigned();
            $table->string('encargado');
            $table->foreign('centroOrganizador')->references('id')->on('centros')->onDelete('cascade');
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
        Schema::drop('eventos');
    }
}
