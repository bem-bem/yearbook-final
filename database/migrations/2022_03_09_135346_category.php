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
        Schema::create('yearlevels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 30);
        });
        Schema::create('sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 30);
        });
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name' , 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
