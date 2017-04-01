<?php

use Illuminate\Database\Seeder;
require_once base_path(). '\vendor\fzaninotto\faker\src\autoload.php';

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
    	$i = 1;
    	foreach (range(1,10) as $index) {
    		DB::table('team')->insert([
        		'name'              => $faker->name,
        		'user_id'			=> $i++
        	]);
    	}
       
    }
}
