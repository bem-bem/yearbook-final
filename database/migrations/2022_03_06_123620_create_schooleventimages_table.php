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
        Schema::create('schooleventimages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->unsignedInteger('schoolevent_id');
            $table->foreign('schoolevent_id')->references('id')->on('schoolevents')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schooleventimages');
    }
};
