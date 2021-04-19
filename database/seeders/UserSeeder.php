<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'id' => 1,
            'rol' => 1,
            'name' => 'Jorge Eduardo Peralta Guzman',
            'email' => 'corpjorge@hotmail.com',
            'documento' => 1014205146,
            'password' => Hash::make('Jorge.1989'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'rol' => 1,
            'documento' => 123456789,        
            'name' => 'John Freddy Moreno',
            'email' => 'john.moreno@fyclsingenieria.com',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'rol' => 1,
            'documento' => 987654321, 
            'name' => 'reservado',
            'email' => 'reservado',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'rol' => 2,
            'documento' => 1014205147, 
            'name' => 'Peralta',
            'email' => 'corpjorge@gmail.com',
            'password' => Hash::make('admin'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
