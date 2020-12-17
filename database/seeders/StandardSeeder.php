<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(count(DB::table('standards')->get())){
            DB::table('standards')->truncate();
        }
        DB::table('standards')->insert([
            'name' => '2.0A.4',
            'description' => 'Use addition to find the total number of objects arranged in rectangular arrays with up to 5 rows and up to 5 columns; write an equation to express the total as a sum of equal addends',
        ]);
        DB::table('standards')->insert([
            'name' => '3.OA.1',
            'description' => 'Interpret the products of whole numbers, such as interpreting 5 × 7 as the total number of objects in 5 groups of 7 objects each.',
        ]);
    }
}
