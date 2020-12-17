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
        if(count(DB::table('activities')->get())){
            DB::table('activities')->truncate();
        }
        DB::table('activities')->insert([
            'id' => 'd2280c13-d2cc-456c-b40a-014830b52616',
            'name' => 'Starting off',
            'description' => 'This activity introduces students to the basic pieces of the UI: Blocks, the canvas, and the view.',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1])),
            'reflections' => json_encode(array('When we have used all the blocks they change color.',
                                                'You have learned how to drag the blocks onto the canvas.',
                                                'You ran the code.',
                                                'Well done!')),
            'prompt' => htmlentities("Drag a <define word='start_block'>start block</define> onto the canvas. Press the <define word='play_button'>play button</define>"),
        ]);
        DB::table('activities')->insert([
            'id' => 'b572bba0-3eec-475e-aadd-a42d99e96268',
            'name' => 'Connecting blocks together',
            'description' => 'This introduces the concept of connecting two blocks together.',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1])),
            'reflections' => json_encode(array(htmlentities("By <define word='connect_block'>connecting</define> the two blocks you told the computer to draw a circle. You have written code!"))),
            'prompt' => htmlentities("Drag a <define word='start_block'>start block</define> and a <define word='circle_block'>circle block</define> onto the canvas and <define word='connect_block'>connect</define> them. Press the <define word='play_button'>play button</define>."),
        ]);
        DB::table('activities')->insert([
            'id' => 'a32bd178-30af-436b-8f37-52cfe1bfb6b0',
            'name' => 'Connecting multiple blocks together',
            'description' => 'Learn about connecting multiple blocks together',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>5])),
            'reflections' => json_encode(array("We are telling our computer to add. In this case, our math sentence looks like this:", "1 circle + 1 circle + 1 circle + 1 circle + 1 circle = 5 circles")),
            'prompt' => htmlentities("Tell the computer to draw 5 circles by <define word='connect_block'>connecting</define> 5 <define word='circle_block'>circle blocks</define> to the <define word='start_block'>start block</define>."),
        ]);
        DB::table('activities')->insert([
            'id' => 'c1b6e7a8-4aec-43c1-81ce-f7dc9584c0bc',
            'name' => 'The Repeat Block',
            'description' => 'Learn about the repeat block. In this activity you will observe the default behavior of the repeat block. You should expect it to repeat the action inside it the number of times found in the input.',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1],['type'=>'repeat_block','limit'=>1])),
            'reflections' => json_encode(array("We just told the computer to do the same thing as last time. This time we only used three blocks.")),
            'prompt' => htmlentities("<define word='connect_block'>Connect</define> a <define word='repeat_block'>repeat block</define> to the <define word='start_block'>start block</define> and then place a <define word='circle_block'>circle block</define> inside of the <define word='repeat_block'>repeat block</define>."),
        ]);
        DB::table('activities')->insert([
            'id' => '626ebc9a-ccf7-49a0-a337-067eebc93580',
            'name' => 'Adjusting the Repeat Block',
            'description' => 'Learn how to adjust the repeat block.',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1],['type'=>'repeat_block','limit'=>1])),
            'reflections' => json_encode(array('not yet decided')),
            'prompt' => htmlentities("Tell the computer to draw 7 circles using the <define word='repeat_block'>repeat block</define> by changing the number 5 on the <define word='repeat_block'>repeat block</define> to 7"),
        ]);
        DB::table('activities')->insert([
            'id' => 'ec2475cf-621b-426e-8168-86b042650724',
            'name' => 'A lot of repeating',
            'description' => 'Learn about placing one repeat block inside another one.',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1],['type'=>'repeat_block','limit'=>2])),
            'reflections' => json_encode(array("We have just taught our computer to do <define word='repeated_addition'>repeated addition</define>.",
                                                "We have several rows with the same number of circles in each row.",
                                                "Repeated addition is also called <define word='multiplication'>multiplication</define>.",
                                                htmlentities("<define word='multiplication'>Multiplication</define>is where we take groups of equal sizes and add all of their items together."))),
            'prompt' => htmlentities("Tell the computer to draw 5 groups of 5 circles.  To do this, place one of the <define word='repeat_block'>repeat blocks</define> inside another <define word='repeat_block'>repeat block</define>. Then place a <define word='circle_block'>circle block</define> into the second <define word='repeat_block'>repeat block</define>."),
        ]);
        DB::table('activities')->insert([
            'id' => 'c12e692c-8293-47c6-8e4b-7fce1e509e83',
            'name' => 'Multiplying using the repeat block',
            'description' => 'Modify the defaults of the nested repeat blocks',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1],['type'=>'repeat_block','limit'=>2])),
            'reflections' => json_encode(array("By counting the circles we know that there are 12 circles total.")),
            'prompt' => htmlentities("Now, let’s <define word='multiplication'>multiply</define>. Place one <define word='repeat_block'>repeat block</define> inside the other one. Then place the <define word='circle_block'>circle block</define> inside the second <define word='repeat_block'>repeat block</define>. Change the <define word='repeat_block'>repeat block</define> numbers to 3 and 4."),
        ]);
        DB::table('activities')->insert([
            'id' => '4fcf1ebf-3044-4573-91ec-2da17ea82591',
            'name' => 'Multiplying',
            'description' => 'Explore multiplication again.',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1],['type'=>'repeat_block','limit'=>2])),
            'reflections' => json_encode(array("By counting all the circles we know that there are 12 circles again. That was the same as last time.",
                                                "3 groups of 4 make the same number as 4 groups of 3.",
                                                "In math we say it like this: 3 times 4 equals 12, and we write it like this: 3 x 4 = 12.",
                                                "This means that we have 3 groups of 4 items and 12 items in total.",
                                                "If we had 5 groups of 3 items, we would write it like this: 5 x 3.",
                                                htmlentities("To get our computer to do this for us we would use 2 <define word='repeat_block'>repeat blocks</define> like before. Then we would modify the first <define word='repeat_block'>repeat block</define> to have 5 as its value and the second <define word='repeat_block'>repeat block</define> would have 3 as its value."))),
            'prompt' => htmlentities("Doing the same thing as before, tell the computer to <define word='multiplication'>multiply</define> by making it repeat 4 circles 3 times."),
        ]);
        DB::table('activities')->insert([
            'id' => '1ddb9234-5940-44c1-a595-6122373e3be4',
            'name' => 'Applying multiplication',
            'description' => 'Solve the multiplication problem',
            'blocks' => json_encode(array(['type'=>'start_block','limit'=>1],['type'=>'draw_shape_circle','limit'=>1],['type'=>'repeat_block','limit'=>2])),
            'reflections' => json_encode(array('undecided')),
            'prompt' => htmlentities("Use <define word='coding'>coding</define>. Find the value of the missing number. 5 x 3 = ____."),
        ]);
    }
}
