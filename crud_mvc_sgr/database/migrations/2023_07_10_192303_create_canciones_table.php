<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCancionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canciones', function (Blueprint $table) {
            $table->enginer = "InnoDB";
            $table->integer('id')->primary();
            $table->string('nombre', 50);
            $table->string('ritmo', 50);
            $table->string('duracion', 50);
            $table->string('album', 50);
            $table->string('posicionenalbum', 50);
            $table->string('banda', 50);
            $table->string('interprete', 50);
            $table->string('autor', 50);
            $table->string('fechalanzamiento', 50);
            $table->integer('usuariocc');
            $table->foreign('usuariocc')->references('cc')->on('usuarios');
            $table->timestamps();
        });

        Schema::table('canciones', function (Blueprint $table) {
            $table->index('usuariocc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canciones');
    }
}
