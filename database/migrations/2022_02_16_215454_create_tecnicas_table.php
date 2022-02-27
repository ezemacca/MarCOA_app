<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTecnicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tecnicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('tecnica_p1');
            $table->text('tecnica_p2');
            $table->text('tecnica_p3');
            $table->text('tecnica_p4_1');
            $table->text('tecnica_p4_2');
            $table->text('tecnica_p4_3');
            $table->text('tecnica_p4_4');
            $table->text('tecnica_p4_5');
            $table->text('tecnica_p4_6');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tecnicas');
    }
}
