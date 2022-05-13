<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->string('descripcion', 90);
            $table->time('tiempo_maximo');
            $table->float('costo_extra', 9, 2);
            $table->string('clave', 45);
            //
            $table->unsignedBigInteger('promociones_id');
            $table->foreign("promociones_id")->references("id")->on("promociones")->onUpdate("cascade")->onDelete("cascade");
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
        Schema::dropIfExists('servicios');
    }
}
