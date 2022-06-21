<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimoni', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('trip');
            $table->string('testimoni');
            $table->timestamps();
        });
        Schema::table('testimoni', function (Blueprint $table) {
            $table->foreign('username')->references('username')->on('users')->onDelete('Restrict')->onUpdate('Restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimoni');
    }
}
