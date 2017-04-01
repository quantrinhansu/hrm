<?php

use Illuminate\Database\Seeder;
require_once base_path(). '\vendor\fzaninotto\faker\src\autoload.php';

class UsersTableSeeder extends Seeder
{
 /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,10) as $index) {
            DB::table('users')->insert([
                'name'              => $faker->name,
                'email'             => $faker->unique()->safeEmail,
                'password'          => bcrypt('anhduc'),
                'role'              => 2,
                'active'            => 1,
                'gender'            => $faker->numberBetween(1,2),
                'first_name'        => $faker->firstNameMale,
                'last_name'         => $faker->lastName,
                'education'         => 'UIT',
                'skill'             => 'php',
                'work_history'      => $faker->company,
                'permanent_address' => $faker->address,
                'present_address'   => $faker->streetAddress,
                'date_of_birth'     => $faker->dateTime(),
                'joining_date'      => $faker->dateTime(),
                'nationality'       => $faker->country,
                'phone_number'      => $faker->phoneNumber,
                'bank_account_name' => $faker->bankAccountNumber ,
                'insurance_code'    => $faker->bankRoutingNumber,
                'maritial_status'   => $faker->numberBetween(1,2),
                'job_position'      => $faker->jobTitle,
                'department_id'     => $faker->numberBetween(1,10),
                'team_id'           => $faker->numberBetween(1,10),
                'job_type_id'          => $faker->numberBetween(1,3),
                'noted'             => $faker->word,
                'leave_per_month'   => $faker->numberBetween(1,10),
                'leave_per_year'    => $faker->numberBetween(1,10),
            ]);
        }
    }
}
