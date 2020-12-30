<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocklyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blockly_events', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->string('type')->nullable();
            $table->boolean('is_ui_event')->nullable();
            $table->string('workspace_id')->nullable();
            $table->string('block_id')->nullable();
            $table->string('group')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blockly_events');
    }
}
