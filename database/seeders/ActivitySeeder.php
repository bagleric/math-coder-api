<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('events');
        Schema::dropIfExists('activities');

        if (count(DB::table('migrations')->get())) {
            DB::table('migrations')->truncate();
        }
//        if (count(DB::table('answers')->get())) {
//            DB::table('answers')->truncate();
//        }
//        if (count(DB::table('events')->get())) {
//            DB::table('events')->truncate();
//        }
//        if (count(DB::table('activities')->get())) {
//            DB::table('activities')->truncate();
//        }
    }
}
