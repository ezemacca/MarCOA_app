<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->tinytext('relacion_p1_rel-1');
            $table->tinytext('relacion_p1_rel-2-1');
            $table->text('relacion_p1_rel-2-2');
            $table->text('relacion_p1_rel-2-3');
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacions');
    }
}
