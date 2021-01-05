<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_blocks', function (Blueprint $table) {
            $table->id();
            $table->integer('event_id');
            $table->string('element')->nullable();
            $table->string('name')->nullable();
            $table->string('old_value')->nullable();
            $table->string('new_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('change_blocks');
    }
}
