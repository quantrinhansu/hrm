<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'anhducmata',
            'email'     => 'anhducmata@gmail.com',
            'password'  => bcrypt('anhduc'),
            'role'      => 1,
            'active'    => 1,
            'gender'    => 1,
            'avatar'    => ''
        ]);

        DB::table('users')->insert([
            'name'      => 'congbinh',
            'email'     => 'cbinh951@gmail.com',
            'password'  => bcrypt('congbinh'),
            'role'      => 1,
            'active'    => 1,
            'gender'    => 1,
            'avatar'    => ''
        ]);
    }
}
