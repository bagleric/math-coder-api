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
            'password' => '$5$cDnJVzNA$iSdJIRa3B/E.89HPq4SiP0qIAuk.W4IYiyTnmbarnu8',
        ]);
    }
}
