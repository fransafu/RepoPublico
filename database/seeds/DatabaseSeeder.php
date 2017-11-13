<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        // Correr semillas
		// Seed Rol
		$this->call(RoleTableSeeder::class);
		// Seed User
		$this->call(UserTableSeeder::class);
    }
}
