<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classphotos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image')->nullable();
            $table->string('section');
            $table->string('yearlevel');
            $table->string('course')->nullable();
            $table->string('schoolyear');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classphotos');
    }
};
