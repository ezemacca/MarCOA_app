<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContribuyentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ciclo_id');
            $table->foreign('ciclo_id')
            ->references('id')
            ->on('generals')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('ciclo_p3_cont-1');
            $table->text('ciclo_p3_cont-2');
            $table->date('ciclo_p3_cont-3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contribuyentes');
    }
}
