<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate dummy data for 10 users
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'email' => $faker->unique()->safeEmail,
                'access_role' => $faker->randomElement(['user', 'admin', 'media', 'icao']),
                'status' => $faker->randomElement(['Pending', 'Approved', 'Rejected']),
                'salutation' => $faker->title,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'passport_num' => $faker->regexify('[A-Z0-9]{10}'),
                'designation' => $faker->jobTitle,
                'gender' => $faker->randomElement(['Male', 'Female']),
                'address' => $faker->address,
                'telephone' => $faker->phoneNumber,
                'mobile' => $faker->phoneNumber,
                'profile_image' => $faker->imageUrl(),
                'passport_photo' => $faker->imageUrl(),
                'approval_doc' => $faker->imageUrl(),
                'badge_name' => $faker->name,
                'conference_role' => $faker->randomElement(['Speaker', 'Participant', 'Observer']),
                'country' => $faker->country,
                'organization' => $faker->company,
                'arrival_flight_num' => $faker->regexify('[A-Z0-9]{5}'),
                'arrival_date' => $faker->date(),
                'arrival_time' => $faker->time(),
                'departure_flight_num' => $faker->regexify('[A-Z0-9]{5}'),
                'departure_date' => $faker->date(),
                'departure_time' => $faker->time(),
                'airport_destination' => $faker->city,
                'hotel_reco' => $faker->company,
                'otherHotel' => $faker->company,
                'attire_size' => $faker->randomElement(['S', 'M', 'L']),
                'attire_special_req' => $faker->sentence,
                'preferred_activity' => $faker->randomElement(['Sightseeing', 'Shopping', 'Adventure']),
                'dietary_restrictions' => $faker->randomElement(['Vegetarian', 'Vegan', 'Gluten-free', 'None']),
                'dietary_special_req' => $faker->sentence,
                'has_spouse' => $faker->randomElement(['Yes', 'No']),
                'accomp_name' => $faker->name,
                'accomp_country' => $faker->country,
                'accomp_preferred_activity' => $faker->randomElement(['Sightseeing', 'Shopping', 'Adventure']),
                'privacy' => $faker->randomElement(['Unapproved', 'Approved']),
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
            ]);
        }
    }
}
