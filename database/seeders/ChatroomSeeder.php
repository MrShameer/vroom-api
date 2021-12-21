<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chatrooms')->insert([
            'user_one' => '11', 
            'user_two' => '3',
        ]);

        DB::table('chatrooms')->insert([
            'user_one' => '11', 
            'user_two' => '1',
        ]);

        DB::table('chatrooms')->insert([
            'user_one' => '4', 
            'user_two' => '11',
        ]);

        DB::table('chatrooms')->insert([
            'user_one' => '6', 
            'user_two' => '11',
        ]);
    }
}
