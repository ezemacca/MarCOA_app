<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesarrollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desarrollos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->unsignedBigInteger('proyecto_id')->unique();
            $table->foreign('proyecto_id')
            ->references('id')
            ->on('proyectos')
            ->unique()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedTinyInteger('subetapa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desarrollos');
    }
}
