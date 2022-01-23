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
        DB::table('vehicles')->insert([
            'owner' => '8',
            'plat' => 'DSDF56', 
            'type' => 'car',
            'brand' => 'toyota',
            'model' => 'camry',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '3',
            'plat' => 'FDG346', 
            'type' => 'bike',
            'brand' => 'toyota',
            'model' => 'camry',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '10',
            'plat' => 'HAJ234', 
            'type' => 'bike',
            'brand' => 'toyota',
            'model' => 'camry',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '11',
            'plat' => 'JMK453', 
            'type' => 'car',
            'brand' => 'honda',
            'model' => 'rt3',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '2',
            'plat' => 'JMK455', 
            'type' => 'car',
            'brand' => 'yamaha',
            'model' => 'cf4',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '3',
            'plat' => 'JMK567', 
            'type' => 'car',
            'brand' => 'yamaha',
            'model' => 'cf4',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '8',
            'plat' => 'KJS345', 
            'type' => 'bike',
            'brand' => 'yamaha',
            'model' => 'cf4',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '5',
            'plat' => 'QWE234', 
            'type' => 'car',
            'brand' => 'yamaha',
            'model' => 'cf4',
            'insurance' => 'ajax insurance',
            'age' => '10',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '5',
            'rent' => '5',
            'list' => '1'
        ]);

    }
}
