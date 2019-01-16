<?php

use Illuminate\Database\Seeder;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 3; $i++) { 
		    DB::table('profile')->insert([
	            'profile_fullname' => str_random(10),
	            'profile_address' => str_random(10),
	        ]);
	    }
    }
}
