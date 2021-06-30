<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateDirectorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->id('id');
            $table->string('nombre');
            $table->string('cargo');
            $table->Biginteger('extension');
            $table->Biginteger('celular');
            $table->string('email');
            $table->Biginteger('centro_costos');
            $table->string('subproceso');
            $table->string('estado');
            $table->string('empresa');
            $table->string('nit');
            $table->integer('zona');
            $table->string('direccion');
            $table->string('pbx');
            $table->string('fax');
            $table->string('sede');
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
        Schema::dropIfExists('directorio');
    }
}
