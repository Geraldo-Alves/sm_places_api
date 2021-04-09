<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('agenda_vacinacao_id');
            $table->boolean('aplicada')->default(false);
            $table->timestamps();

            $table->foreign('user_id')
                ->references("id")
                ->on("users");
            $table->foreign('agenda_vacinacao_id')
                ->references("id")
                ->on("agenda_vacinacao");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_agenda');
    }
}
