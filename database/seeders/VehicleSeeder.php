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
            'brand' => 'Audi',
            'model' => 'Q3',
            'insurance' => 'ajax insurance',
            'age' => '2',
            'passanger' => '6',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '1.25',
            'rent' => '150',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '3',
            'plat' => 'FDG346', 
            'type' => 'bike',
            'brand' => 'Yamaha',
            'model' => 'YZF-R15',
            'insurance' => 'ajax insurance',
            'age' => '2',
            'passanger' => '2',
            'door' => '0',
            'luggage' => '5',
            'gallon' => '1',
            'rent' => '90',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '10',
            'plat' => 'HAJ234', 
            'type' => 'bike',
            'brand' => 'Harley D',
            'model' => 'Heritige',
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
            'brand' => 'Audi',
            'model' => 'Q4',
            'insurance' => 'ajax insurance',
            'age' => '2',
            'passanger' => '6',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '1.5',
            'rent' => '150',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '2',
            'plat' => 'JMK455', 
            'type' => 'car',
            'brand' => 'Hyundai',
            'model' => 'Accent',
            'insurance' => 'ajax insurance',
            'age' => '2',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '1.5',
            'rent' => '100',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '3',
            'plat' => 'JMK567', 
            'type' => 'car',
            'brand' => 'Audi',
            'model' => 'Q5',
            'insurance' => 'ajax insurance',
            'age' => '1',
            'passanger' => '5',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '1.5',
            'rent' => '120',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '8',
            'plat' => 'KJS345', 
            'type' => 'bike',
            'brand' => 'yamaha',
            'model' => 'YTZ-11',
            'insurance' => 'ajax insurance',
            'age' => '2',
            'passanger' => '2',
            'door' => '0',
            'luggage' => '3',
            'gallon' => '1.2',
            'rent' => '90',
            'list' => '1'
        ]);

        DB::table('vehicles')->insert([
            'owner' => '5',
            'plat' => 'QWE234', 
            'type' => 'car',
            'brand' => 'Audi',
            'model' => 'Q8',
            'insurance' => 'ajax insurance',
            'age' => '2',
            'passanger' => '6',
            'door' => '4',
            'luggage' => '5',
            'gallon' => '1.5',
            'rent' => '150',
            'list' => '1'
        ]);

    }
}
