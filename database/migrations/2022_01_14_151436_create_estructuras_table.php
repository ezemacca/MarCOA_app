<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estructuras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diseño_id');
            $table->foreign('diseño_id')->references('id')->on('diseños')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('estructura_p1');
            $table->text('estructura_p2');
            $table->unsignedTinyInteger('tipo');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estructuras');
    }
}
