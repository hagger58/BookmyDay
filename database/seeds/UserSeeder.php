<?php

use Illuminate\Database\Seeder;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $gender = $faker->randomElement(['male', 'female']);
        
        $user = new User();
        
            $user->name= $faker->firstNameMale;
            $user->adress= $faker->address;
            $user->zipcode= $faker->postcode;
            $user->country= $faker->country;
            $user->phone_number= $faker->phoneNumber;
            $user->gender= $gender;
            $user->language= $faker->languageCode;
            $user->birthday= $faker->$faker->date($format = 'Y-m-d', $max = 'now');
            $user->email= $faker->email;
            $user->password= $faker->bcrypt('secret');
            $user->save();
    }
}
