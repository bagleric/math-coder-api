<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        if(count(DB::table('admins')->get())){
//            DB::table('admins')->truncate();
//        }
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => '$2b$10$0tPMAqCfLfPFJ.zIc05zWuhZgUlvsutddxHYYZpZ3Qff8RcBlPlg6',
        ]);
    }
}
