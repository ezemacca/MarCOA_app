<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDerechosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derechos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('metadatos_id')->unique();
            $table
            ->foreign('metadatos_id')
            ->references('id')
            ->on('metadatos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->tinytext('derechos_p1');
            $table->tinytext('derechos_p2');
            $table->tinytext('derechos_p3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('derechos');
    }
}
