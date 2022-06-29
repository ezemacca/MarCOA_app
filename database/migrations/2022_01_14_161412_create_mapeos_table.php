<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMapeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapeos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('multimedial_id');
            $table->foreign('multimedial_id')->references('id')->on('multimedials')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('nodo');
            $table->text('descripcion');
            $table->text('plantilla');
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
        Schema::dropIfExists('mapeos');
    }
}
