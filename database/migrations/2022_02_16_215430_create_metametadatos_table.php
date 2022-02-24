<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetametadatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metametadatos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('metametadatos_p1');
            $table->date('metametadatos_p2');
            $table->text('metametadatos_p3');
            $table->text('metametadatos_p4');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metametadatos');
    }
}
