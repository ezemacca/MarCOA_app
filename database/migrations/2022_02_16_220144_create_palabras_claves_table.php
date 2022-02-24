<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePalabrasClavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('palabras_claves', function (Blueprint $table) {
            $table->id();
            

            $table->unsignedBigInteger('general_id');
            $table->foreign('general_id')
            ->references('id')
            ->on('generals')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->tinytext('general_p6');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('palabras_claves');
    }
}
