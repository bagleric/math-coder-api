<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefinitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(count(DB::table('definitions')->get())){
            DB::table('definitions')->truncate();
        }
        DB::table('definitions')->insert([
            'name' => json_encode(['Start Block']),
            'definition_html' => 'A code block that is placed at the beginning of each code activity.',
        ]);
        DB::table('definitions')->insert([
            'name' => json_encode(['Circle Block']),
            'definition_html' => 'A code block that draws a circle',
        ]);
        DB::table('definitions')->insert([
            'name' => json_encode(['Connect']),
            'definition_html' => 'Make one block attach to another block',
        ]);
        DB::table('definitions')->insert([
            'name' => json_encode(['Repeat Block']),
            'definition_html' => htmlentities('This block is made up of two parts. <ol><li><strong>Number Input:<strong> this tells us how many times we should run the code inside the code slot<li><li><strong>Code Slot:</strong> The area we can put other code blocks.</li></ol> This block allows us to do one thing many times'),
        ]);
        DB::table('definitions')->insert([
            'name' => json_encode(['Multiplication', 'Multiply']),
            'definition_html' => 'This is similar to repeated addition. We add up one or more groups with equal items in each group.',
        ]);
        DB::table('definitions')->insert([
            'name' => json_encode(['Coding']),
            'definition_html' => 'Creating instructions for a computer to read. This is how we tell computers what to do.',
        ]);
        DB::table('definitions')->insert([
            'name' => json_encode(['Play Button', 'Play']),
            'definition_html' => 'The button that tells the computer to make our code do something.',
        ]);
    }
}
