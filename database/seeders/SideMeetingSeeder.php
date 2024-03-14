<?php

namespace Database\Seeders;

use App\Models\SideMeeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SideMeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an instance of Faker
        $faker = Faker::create();

        // Loop to create multiple side meetings
        for ($i = 0; $i < 10; $i++) {
            SideMeeting::create([
                'days_drop' => $faker->randomElement(['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5']),
                'meeting_room_drop' => $faker->randomElement(['Meeting Room A', 'Meeting Room B', 'Meeting Room C']),
                'time_drop' => $faker->randomElement([
                    '08:00-08:30', '08:30-09:00', '09:00-09:30', '09:30-10:00', '10:00-10:30',
                    '10:30-11:00', '11:00-11:30', '11:30-12:00', '12:00-12:30', '12:30-13:00',
                    '13:00-13:30', '13:30-14:00', '14:00-14:30', '14:30-15:00', '15:00-15:30',
                    '15:30-16:00', '16:00-16:30', '16:30-17:00', '17:00-17:30', '17:30-18:00',
                ]),
                'country_drop' => $faker->country,
                'reserved_by' => $faker->country,
                'approval_status' => $faker->randomElement(['Approved', 'Pending']),
            ]);
        }
    }
}
