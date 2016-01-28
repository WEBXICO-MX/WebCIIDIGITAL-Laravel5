<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomiciliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domicilios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("persona_id")->unsigned()->nullable();
            $table->foreign("persona_id")->references("id")->on("personas")->onDelete("cascade");
            $table->integer("municipio_id")->unsigned()->nullable();
            $table->foreign("municipio_id")->references("id")->on("municipios")->onDelete("cascade");
            $table->string("colonia", 50);
            $table->string("calle", 50);
            $table->string("numero", 15);
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
        Schema::drop('domicilios');
    }
}
