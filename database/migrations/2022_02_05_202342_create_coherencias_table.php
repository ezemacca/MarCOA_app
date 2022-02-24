<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoherenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coherencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('proyecto_id')->unique();
            $table
            ->foreign('proyecto_id')
            ->references('id')
            ->on('proyectos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->boolean('coherencia_p1')->nullable()->default(false);
            $table->boolean('coherencia_p2')->nullable()->default(false);
            $table->boolean('coherencia_p3')->nullable()->default(false);
            $table->boolean('coherencia_p4')->nullable()->default(false);
            $table->boolean('coherencia_p5')->nullable()->default(false);
            $table->boolean('coherencia_p6')->nullable()->default(false);
            $table->boolean('coherencia_p7')->nullable()->default(false);
            $table->boolean('coherencia_p8')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coherencias');
    }
}
