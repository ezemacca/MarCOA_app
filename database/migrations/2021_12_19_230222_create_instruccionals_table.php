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
            $table->unsignedBigInteger('proyecto_id')->unique();
            $table->foreign('proyecto_id')
            ->references('id')
            ->on('proyectos')
            ->unique()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedTinyInteger('subetapa');
        });

        Schema::create('instruccionals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('diseño_id')->unique();
            $table->foreign('diseño_id')
            ->references('id')
            ->on('diseños')
            ->unique()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('instruccional_p1')->nullable();
            $table->text('instruccional_p2')->nullable();
            $table->text('instruccional_p3')->nullable();
            $table->text('instruccional_p4')->nullable();
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
