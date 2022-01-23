<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            'owner' => '6',
            'plat' => 'JMK455', 
            'message' => 'Bagus',
            'rating' => '3.00',
            'created' => now(),
        ]);

        DB::table('ratings')->insert([
            'owner' => '5',
            'plat' => 'DSDF56', 
            'message' => 'Bagus',
            'rating' => '4.00',
            'created' => now(),
        ]);
    }
}
