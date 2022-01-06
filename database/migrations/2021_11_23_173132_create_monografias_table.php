<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monografias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('orientador');
            $table->string('titulacao_orientador');
            $table->string('coorientador')->nullable();
            $table->string('titulacao_coorientador')->nullable();
            $table->string('curso');
            $table->string('campus');

            $table->unsignedBigInteger('documento_id');
            $table->foreign('documento_id')->references('id')->on('ficha_catalograficas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monografias');
    }
}