<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'lessee' => '7',
            'plat' => 'JMK453', 
            'status' => 'accepted',
            'message' => 'otak ko la kereta rosak dah',
            'total' => '345',
            'payment_type' => 'Online Banking',
            'payment' => now(),
            'pickup' => now(),
            'return' => now(),
            'location' => 'Jakarta',
            'progress' => 'paid',
        ]);

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'JMK453', 
            'status' => 'rejected',
            'message' => 'otak ko la kereta rosak dah',
            'total' => '123',
            'payment_type' => 'Online Banking',
            'payment' => now(),
            'pickup' => now(),
            'return' => now(),
            'location' => 'Jakarta',
        ]);

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'QWE234', 
            'status' => 'pending',
            'total' => '1223',
            'payment_type' => 'Online Banking',
            'payment' => now(),
            'pickup' => now(),
            'return' => now(),
            'location' => 'Jakarta',
        ]);

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'DSDF56', 
            'status' => 'pending',
            'message' => 'otak ko la kereta rosak dah',
            'total' => '1243',
            'payment_type' => 'Online Banking',
            'payment' => now(),
            'pickup' => now(),
            'return' => now(),
            'location' => 'Jakarta',
            'progress' => 'paid',
        ]);
    }
}
