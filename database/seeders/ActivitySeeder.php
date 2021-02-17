<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (count(DB::table('users')->get())) {
            DB::table('users')->truncate();
        }
        if (count(DB::table('answers')->get())) {
            DB::table('answers')->truncate();
        }
        if (count(DB::table('events')->get())) {
            DB::table('events')->truncate();
        }
        if (count(DB::table('activities')->get())) {
            DB::table('activities')->truncate();
        }
    }
}
