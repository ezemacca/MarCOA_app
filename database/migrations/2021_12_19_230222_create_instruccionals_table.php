<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstruccionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('diseños', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedTinyInteger('subetapa');
        });

        Schema::create('instruccionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('diseño_id');
            $table->foreign('diseño_id')->references('id')->on('diseños')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('instruccional_p1');
            $table->text('instruccional_p2');
            $table->text('instruccional_p3');
            $table->text('instruccional_p4');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instruccionals');
        Schema::dropIfExists('diseños');
    }
}
