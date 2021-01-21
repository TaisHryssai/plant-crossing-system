<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	\App\User::firstOrCreate([
    		'email' => 'admin@gmail.com',
    		'name' => 'Admin',
            'password' => Hash::make('123456'),
    	]);
    }
}
