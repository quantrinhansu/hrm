<?php

use Illuminate\Database\Seeder;

class JobTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job_type = array('Intership', 'Developer', 'Manager');
        foreach ($job_type as $key => $value) {
        	DB::table('job_type')->insert([
        		'name' => $value
        	]);
        }
    }
}
