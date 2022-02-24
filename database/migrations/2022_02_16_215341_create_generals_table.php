<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('metadatos', function (Blueprint $table) {
            $table->id();
            

            $table->unsignedBigInteger('desarrollo_id')->unique();
            $table->foreign('desarrollo_id')
            ->references('id')
            ->on('desarrollos')
            ->unique()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedTinyInteger('subetapa');


        });
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('general_p1');
            $table->text('general_p2');
            $table->text('general_p3');
            $table->text('general_p4');
            $table->text('general_p5');
            $table->text('general_p7');
            $table->text('general_p8');
            $table->text('general_p9');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metadatos');
        Schema::dropIfExists('generals');

    }
}
