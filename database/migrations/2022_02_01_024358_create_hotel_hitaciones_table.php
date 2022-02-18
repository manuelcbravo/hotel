<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelHitacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_habitaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('numero');
            $table->integer('personas')->default('0');
            $table->integer('tipo');
            $table->integer('estatus')->default(1)->comment('se desactiva cuando esta en servicio');
            $table->integer('piso');
            $table->integer('television');
            $table->string('descripcion')->nullable();
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('hotel_habitaciones');
    }
}
