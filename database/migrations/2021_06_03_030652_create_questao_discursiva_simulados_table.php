<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestaoDiscursivaSimuladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questao_discursiva_simulados', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('simulado_id');
            $table->unsignedInteger('questao_discursiva_id');
            $table->foreign('simulado_id')->references('id')->on('simulados');
            $table->foreign('questao_discursiva_id')->references('id')->on('questao_discursivas');
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
        Schema::dropIfExists('questao_discursiva_simulados');
    }
}
