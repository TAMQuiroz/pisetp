<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'id'			=>	1,
            'name' 			=> 	'Hobbit',
            'description' 	=> 	'Este usuario es un hobbit de la comarca',
        ]);

        DB::table('roles')->insert([
        	'id'			=>	2,
            'name' 			=> 	'Elfo',
            'description' 	=> 	'Este usuario es un elfo de Rivendel',
        ]);

        DB::table('roles')->insert([
        	'id'			=>	3,
            'name' 			=> 	'Humano',
            'description' 	=> 	'Este usuario es un humano de Rohan',
        ]);
    }
}
