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
            // $table->id();
            // $table->foreignId('lessee')->constrained('users')->onDelete('cascade');
            // $table->foreignId('plat')->constrained('users')->onDelete('cascade');
            // $table->enum('status', ['accepted', 'rejected', 'pending']);
            // $table->mediumText('message')->nullable();

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'JMK567', 
            'status' => 'accepted',
            'message' => 'otak ko la kereta rosak dah'
        ]);

        DB::table('status')->insert([
            'lessee' => '1',
            'plat' => 'JMK453', 
            'status' => 'rejected',
            'message' => 'otak ko la kereta rosak dah'
        ]);

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'KJS345', 
            'status' => 'accepted',
            'message' => 'otak ko la kereta rosak dah'
        ]);

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'FDG346', 
            'status' => 'rejected',
            'message' => 'wth bro'
        ]);

        DB::table('status')->insert([
            'lessee' => '11',
            'plat' => 'JMK453', 
            'status' => 'pending',
            'message' => 'Jap Eh'
        ]);
    }
}
