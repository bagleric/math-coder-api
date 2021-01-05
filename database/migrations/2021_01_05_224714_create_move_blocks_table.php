<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoveBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('move_blocks', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->string('old_parent_id')->nullable();
            $table->string('old_input_name')->nullable();
            $table->text('old_coordinate')->nullable();
            $table->string('new_parent_id')->nullable();
            $table->string('new_input_name')->nullable();
            $table->text('new_coordinate')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('move_blocks');
    }
}
