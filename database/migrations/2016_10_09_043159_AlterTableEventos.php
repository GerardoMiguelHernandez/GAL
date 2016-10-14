<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableEventos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
      Schema::table('eventos', function(Blueprint $table){
                $table->integer('categoria_id')->unsigned()->after('imagen');
                $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::table('eventos', function(Blueprint $table){
              $table->dropForeign('eventos_categoria_id_foreign');

});
    }
}
