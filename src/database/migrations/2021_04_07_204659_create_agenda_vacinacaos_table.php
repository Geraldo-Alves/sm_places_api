<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaVacinacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda_vacinacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data_inicio_vacinacao');
            $table->date('data_fim_vacinacao');
            $table->string('uf');
            $table->string('cidade');
            $table->string('local_vacinacao');
            $table->integer('idade_minima');
            $table->integer('numero_dose');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda_vacinacao');
    }
}
