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
            $table->string('image' , 10)->nullable();
            $table->string('section' , 30);
            $table->string('yearlevel' , 30);
            $table->string('course' , 30)->nullable();
            $table->string('schoolyear' , 9);
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
