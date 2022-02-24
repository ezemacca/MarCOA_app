<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clasificacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->tinytext('clasificaciones_p1_cla-1');
            $table->text('clasificaciones_p1_cla-2');
            $table->text('clasificaciones_p1_cla-3');
            $table->text('clasificaciones_p1_cla-4');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clasificacions');
    }
}
