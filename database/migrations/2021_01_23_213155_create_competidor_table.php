<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetidorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competidor', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('apellidos', 30);
            $table->Integer('edad');
            $table->string('imgCompetidor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('competidor');
    }
}
