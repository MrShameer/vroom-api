<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'shameer',
            'email' => 'familyzura@gmail.com', 
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'role' => 'lessee',
            'phone' => '01140448922',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'name' => 'Admin Admin',
            'email' => 'admin@argon.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'role' => 'lessee',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}

