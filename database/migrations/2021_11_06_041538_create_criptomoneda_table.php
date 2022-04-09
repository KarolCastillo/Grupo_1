<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCriptomonedaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('criptomoneda', function (Blueprint $table) {
            $table->id();
            $table->string('logotipo');
            $table->string('nombre');
            $table->string('precio');
            $table->string('descripcion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('criptomoneda');
    }
}
