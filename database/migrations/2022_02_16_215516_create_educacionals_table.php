<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educacionals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('educacional_p1');
            $table->text('educacional_p2');
            $table->text('educacional_p3');
            $table->text('educacional_p4');
            $table->text('educacional_p5');
            $table->text('educacional_p6');
            $table->text('educacional_p7');
            $table->text('educacional_p8');
            $table->text('educacional_p9');
            $table->text('educacional_p10');
            $table->text('educacional_p11');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educacionals');
    }
}
