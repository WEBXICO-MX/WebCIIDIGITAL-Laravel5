<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedioComunicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medio_comunicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("persona_id")->unsigned()->nullable();
            $table->foreign("persona_id")->references("id")->on("personas")->onDelete("cascade");
            $table->integer("tipo_medio_comunicacion_id")->unsigned()->nullable();
            $table->foreign("tipo_medio_comunicacion_id")->references("id")->on("tipo_medio_comunicaciones")->onDelete("cascade");
            $table->string("valor", 30);
            $table->boolean("activo");
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
        Schema::drop('medio_comunicaciones');
    }
}
