<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlist')->insert([
            'user' => '3',
            'plat' => 'FDG346'
        ]);

        DB::table('wishlist')->insert([
            'user' => '2',
            'plat' => 'JMK567'
        ]);

        DB::table('wishlist')->insert([
            'user' => '4',
            'plat' => 'QWE234'
        ]);

        DB::table('wishlist')->insert([
            'user' => '5',
            'plat' => 'DSDF56'
        ]);

        DB::table('wishlist')->insert([
            'user' => '7',
            'plat' => 'HAJ234'
        ]);

    }
}
