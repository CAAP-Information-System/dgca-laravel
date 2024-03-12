<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\File;
use Faker\Factory as Faker;

class FilesSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate dummy data for 10 files
        for ($i = 0; $i < 10; $i++) {
            File::create([
                'name' => $faker->word . '.pdf',
                'owner' => $faker->name,
                'upload_date' => $faker->date(),
                'size' => $faker->numberBetween(100, 1000),
                'file_category' => $faker->randomElement(['Agenda', 'Order of Business', 'Programme', 'Discussion', 'Information']),
                'doc_status' => $faker->randomElement(['Approved', 'Pending', 'Deleted']),
                'discussion_agenda' => $faker->randomElement([
                    "-- Select Option --",
                    "Agenda 1: Theme Topic",
                    "Agenda 2: Review of Action Items arising from the previous Conference",
                    "Agenda 3: Aviation Safety",
                    "Agenda 4: Air Navigation",
                    "Agenda 5: Aviation Security and Facilitation",
                    "Agenda 6: Economic Development of Air Transport",
                    "Agenda 7: Aviation and Environment",
                    "Agenda 8: Capacity Development and Implementation",
                    "Agenda 9a: Ratification of International Air Law Treaties",
                    "Agenda 9b: Updates",
                    "Agenda 10a: Any Other Matters",
                    "Agenda 10b: Hosting Offer and Theme Topic for the forthcoming Conference(s) of APAC DGCA",
                    "Agenda 10c: Endorsement of Action Items arising from the present Conference",
                    "Presentation/Video"
                ]),
                'information_agenda' => $faker->randomElement([
                    "-- Select Option --",
                    "Agenda 1: Theme Topic",
                    "Agenda 2: Review of Action Items arising from the previous Conference",
                    "Agenda 3: Aviation Safety",
                    "Agenda 4: Air Navigation",
                    "Agenda 5: Aviation Security and Facilitation",
                    "Agenda 6: Economic Development of Air Transport",
                    "Agenda 7: Aviation and Environment",
                    "Agenda 8: Capacity Development and Implementation",
                    "Agenda 9a: Ratification of International Air Law Treaties",
                    "Agenda 9b: Updates",
                    "Agenda 10a: Any Other Matters",
                    "Agenda 10b: Hosting Offer and Theme Topic for the forthcoming Conference(s) of APAC DGCA",
                    "Agenda 10c: Endorsement of Action Items arising from the present Conference",
                    "Presentation/Video"
                ]),
            ]);
        }
    }
}
