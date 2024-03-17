<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'email' => $faker->unique()->safeEmail,
                'access_role' => 'user',
                'status' => 'Pending',
                'salutation' => $faker->title,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'passport_num' => $faker->ean8,
                'designation' => $faker->jobTitle,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'address' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'mobile' => $faker->phoneNumber,
                'arrival_flight_num' => $faker->randomNumber(4),
                'arrival_date' => $faker->date(),
                'arrival_time' => $faker->time(),
                'departure_flight_num' => $faker->randomNumber(4),
                'departure_date' => $faker->date(),
                'departure_time' => $faker->time(),
                'airport_destination' => $faker->randomElement(['MIA Terminal 1', 'MIA Terminal 2', 'MIA Terminal 3', 'Mactan-Cebu International Airport']),
                'badge_name' => $faker->name,
                'conference_role' => $faker->randomElement(['Head Delegate', 'Delegate', 'Observer', 'Panelist', 'Sponsor/Exhibitor']),
                'country' => $faker->country,
                'organization' => $faker->company,
                'hotel_reco' => $faker->randomElement(['Chateau By The Sea', 'Be Resort Mactan', 'Shangri-La Mactan', 'Mövenpick Cebu']),
                'neck' => $faker->numberBetween(30, 50),
                'shoulder' => $faker->numberBetween(30, 50),
                'preferred_activity' => $faker->randomElement(['Event 1', 'Event 2', 'Event 3']),
                'dietary_restrictions' => $faker->randomElement(['Halal', 'Vegetarian', 'No Pork', 'No Beef', 'None']),
                'password' => Hash::make('password'), // Change 'password' to desired default password
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
