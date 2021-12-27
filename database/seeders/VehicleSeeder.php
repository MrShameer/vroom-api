<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // $table->foreignId('owner')->constrained('users')->onDelete('cascade');
        // $table->string('plat')->unique();
        // $table->enum('type', ['car', 'bike','bicycle','van']);
        // $table->string('brand');
        // $table->string('model');
        // $table->string('insurance');
        // $table->integer('age');
        // $table->integer('passanger');
        // $table->integer('door');
        // $table->integer('luggage');
        // $table->integer('gallon');
        // $table->integer('rent');

        //
        //\App\Models\Vehicle::factory(10)->create();
        DB::table('vehicles')->insert([
            'owner' => '1',
            'plat' => 'JMK453', 
            'type' => 'car',
            'brand' => 'toyota',
            'model' => 'camry',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '2',
            'plat' => 'JMK455', 
            'type' => 'car',
            'brand' => 'toyota',
            'model' => 'camry',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '3',
            'plat' => 'JMK567', 
            'type' => 'car',
            'brand' => 'toyota',
            'model' => 'camry',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '8',
            'plat' => 'KJS345', 
            'type' => 'bike',
            'brand' => 'honda',
            'model' => 'rt3',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '3',
            'plat' => 'FDG346', 
            'type' => 'bike',
            'brand' => 'yamaha',
            'model' => 'cf4',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5'
        ]);

    }
}
