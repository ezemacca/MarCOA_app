<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultimedialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedials', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('diseño_id');
            $table->foreign('diseño_id')->references('id')->on('diseños')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->text('diseño_mult_p1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('multimedials');
    }
}
