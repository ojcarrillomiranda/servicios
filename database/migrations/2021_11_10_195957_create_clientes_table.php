<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('nit')->unique();
            $table->string('razon_social');
            $table->bigInteger('telefono');
            $table->unsignedBigInteger('ciudad_id');
            $table->string('direccion');
            $table->string('email')->unique();
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->softDeletes();
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
        Schema::dropIfExists('clientes');
    }
}
