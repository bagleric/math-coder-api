<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('activity_id');
            $table->string('module_id');
            $table->dateTime('started_at');
            $table->dateTime('ended_at');
            $table->integer('no_of_compiles');
            $table->boolean('completed');
            $table->text('compilation_timestamps');
            $table->string('screen_size');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
