<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogActividadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_actividades', function (Blueprint $table) {
            $table->id();
            $table->string('accion');
            $table->string('url');
            $table->string('metodo');
            $table->string('ip');
            $table->string('agente')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('tabla')->nullable();
            $table->integer('id_lead')->nullable();
            $table->integer('id_registro')->nullable();
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
        Schema::dropIfExists('log_actividades');
    }
}
