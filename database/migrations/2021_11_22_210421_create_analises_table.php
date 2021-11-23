<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->constrained('users');
            $table->foreignId('proyecto_id')->constrained('proyectos');
            $table->text('1_necesidad_dest');
            $table->text('2_utilidad_oa');
            $table->text('3_nivel_educ');
            $table->text('4_tema_oa');
            $table->text('5_conoc_prev');
            $table->text('4_conoc_post');
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
        Schema::dropIfExists('analises');
    }
}
