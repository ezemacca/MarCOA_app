<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proyecto_id')->unique();
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
            ->unique()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->text('analisis_p1')->nullable();
            $table->text('analisis_p2')->nullable();
            $table->text('analisis_p3')->nullable();
            $table->text('analisis_p4')->nullable();
            $table->text('analisis_p5')->nullable();
            $table->text('analisis_p6')->nullable();
            $table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analises');
    }
}
