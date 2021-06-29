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
            $table->string('email')->unique();
            $table->Biginteger('centro_costos');
            $table->string('subproceso');
            $table->text('estado');
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
