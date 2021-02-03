<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJudoguiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('judogui', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idCompetidor')->unsigned();
            $table->string('imgJudogui');
            $table->string('marca', 20);
            $table->string('modelo', 25);
            $table->Integer('talla');
            $table->string('color', 10);
            $table->timestamps();
            $table->foreign('idCompetidor')->references('id')->on('competidor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('judogui');
    }
}
