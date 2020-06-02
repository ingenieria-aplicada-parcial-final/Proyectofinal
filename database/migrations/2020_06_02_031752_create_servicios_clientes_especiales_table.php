<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosClientesEspecialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_clientes_especiales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('precio');
            $table->bigInteger('servicio_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned();
  
            $table->foreign('servicio_id')
                  ->references('id')
                  ->on('servicios');
  
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes');
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
        Schema::dropIfExists('servicios_clientes_especiales');
    }
}
