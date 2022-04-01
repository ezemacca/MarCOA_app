<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplementacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desarrollo_id');
            $table->foreign('desarrollo_id')
            ->references('id')
            ->on('desarrollos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('decision',100)->nullable()->default('null');
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
        Schema::dropIfExists('implementacions');
    }
}
