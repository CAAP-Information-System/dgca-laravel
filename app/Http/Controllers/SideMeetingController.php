<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SideMeeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SideMeetingController extends Controller
{
    public function viewMeetingRoom()
    {
        $user = Auth::user();
        $days_drop = [
            "Day 1",
            "Day 2",
            "Day 3",
            "Day 4",
            "Day 5",
        ];
        $meeting_room_drop = [
            "Meeting Room A",
            "Meeting Room B",
            "Meeting Room C",
        ];
        $time_drop = [
            "08:00-08:30",
            "08:30-09:00",
            "09:00-09:30",
            "09:30-10:00",
            "10:00-10:30",
            "10:30-11:00",
            "11:00-11:30",
            "11:30-12:00",
            "12:00-12:30",
            "12:30-13:00",
            "13:00-13:30",
            "13:30-14:00",
            "14:00-14:30",
            "14:30-15:00",
            "15:00-15:30",
            "15:30-16:00",
            "16:00-16:30",
            "16:30-17:00",
            "17:00-17:30",
            "17:30-18:00",
        ];
        $reserved_by = [
            "Afghanistan",
            "Australia",
            "Bangladesh",
            "Bhutan",
            "Brunei Darussalam",
            "Cambodia",
            "China",
            "Hong Kong",
            "Macao",
            "Cook Islands",
            "Republic of Korea",
            "Fiji",
            "India",
            "Indonesia",
            "Japan",
            "Kiribati",
            "Lao People's Democratic Republic",
            "Malaysia",
            "Maldives",
            "Marshall Islands",
            "Micronesia (Federal States of)",
            "Mongolia",
            "Myanmar",
            "Nauru",
            "Nepal",
            "New Zealand",
            "Pakistan",
            "Palau",
            "Papua New Guinea",
            "Philippines",
            "Republic of Korea",
            "Samoa",
            "Singapore",
            "Solomon Islands",
            "Sri Lanka",
            "Thailand",
            "Timor Leste",
            "Tonga",
            "Tuvalu",
            "Vanuatu",
            "Viet Nam",
        ];
        $country_drop = [
            "Afghanistan",
            "Australia",
            "Bangladesh",
            "Bhutan",
            "Brunei Darussalam",
            "Cambodia",
            "China",
            "Hong Kong",
            "Macao",
            "Cook Islands",
            "Democratic People's Republic of Korea",
            "Fiji",
            "India",
            "Indonesia",
            "Japan",
            "Kiribati",
            "Lao People's Democratic Republic",
            "Malaysia",
            "Maldives",
            "Marshall Islands",
            "Micronesia (Federal States of)",
            "Mongolia",
            "Myanmar",
            "Nauru",
            "Nepal",
            "New Zealand",
            "Pakistan",
            "Palau",
            "Papua New Guinea",
            "Philippines",
            "Republic of Korea",
            "Samoa",
            "Singapore",
            "Solomon Islands",
            "Sri Lanka",
            "Thailand",
            "Timor Leste",
            "Tonga",
            "Tuvalu",
            "Vanuatu",
            "Viet Nam",
        ];
        $country_drop = [
            "Afghanistan",
            "Australia",
            "Bangladesh",
            "Bhutan",
            "Brunei Darussalam",
            "Cambodia",
            "China",
            "Hong Kong",
            "Macao",
            "Cook Islands",
            "Republic of Korea",
            "Fiji",
            "India",
            "Indonesia",
            "Japan",
            "Kiribati",
            "Lao People's Democratic Republic",
            "Malaysia",
            "Maldives",
            "Marshall Islands",
            "Micronesia (Federal States of)",
            "Mongolia",
            "Myanmar",
            "Nauru",
            "Nepal",
            "New Zealand",
            "Pakistan",
            "Palau",
            "Papua New Guinea",
            "Philippines",
            "Republic of Korea",
            "Samoa",
            "Singapore",
            "Solomon Islands",
            "Sri Lanka",
            "Thailand",
            "Timor Leste",
            "Tonga",
            "Tuvalu",
            "Vanuatu",
            "Viet Nam",
        ];

        $meeting_rooms = SideMeeting::all();
        return view('main.meeting_room', compact('user', 'days_drop', 'meeting_room_drop', 'time_drop', 'meeting_rooms', 'country_drop', 'reserved_by'));
    }

    public function reserveMeetingRoom(Request $request)
    {
        $user = Auth::user();

        $days_drop = [
            "Day 1",
            "Day 2",
            "Day 3",
            "Day 4",
            "Day 5",
        ];
        $meeting_room_drop = [
            "Meeting Room A",
            "Meeting Room B",
            "Meeting Room C",
        ];
        $time_drop = [
            "08:00-08:30",
            "08:30-09:00",
            "09:00-09:30",
            "09:30-10:00",
            "10:00-10:30",
            "10:30-11:00",
            "11:00-11:30",
            "11:30-12:00",
            "12:00-12:30",
            "12:30-13:00",
            "13:00-13:30",
            "13:30-14:00",
            "14:00-14:30",
            "14:30-15:00",
            "15:00-15:30",
            "15:30-16:00",
            "16:00-16:30",
            "16:30-17:00",
            "17:00-17:30",
            "17:30-18:00",
        ];
        $reserved_by = [
            "Afghanistan",
            "Australia",
            "Bangladesh",
            "Bhutan",
            "Brunei Darussalam",
            "Cambodia",
            "China",
            "Hong Kong",
            "Macao",
            "Cook Islands",
            "Democratic People's Republic of Korea",
            "Fiji",
            "India",
            "Indonesia",
            "Japan",
            "Kiribati",
            "Lao People's Democratic Republic",
            "Malaysia",
            "Maldives",
            "Marshall Islands",
            "Micronesia (Federal States of)",
            "Mongolia",
            "Myanmar",
            "Nauru",
            "Nepal",
            "New Zealand",
            "Pakistan",
            "Palau",
            "Papua New Guinea",
            "Philippines",
            "Republic of Korea",
            "Samoa",
            "Singapore",
            "Solomon Islands",
            "Sri Lanka",
            "Thailand",
            "Timor Leste",
            "Tonga",
            "Tuvalu",
            "Vanuatu",
            "Viet Nam",
        ];
        $country_drop = [
            "Afghanistan",
            "Australia",
            "Bangladesh",
            "Bhutan",
            "Brunei Darussalam",
            "Cambodia",
            "China",
            "Hong Kong",
            "Macao",
            "Cook Islands",
            "Democratic People's Republic of Korea",
            "Fiji",
            "India",
            "Indonesia",
            "Japan",
            "Kiribati",
            "Lao People's Democratic Republic",
            "Malaysia",
            "Maldives",
            "Marshall Islands",
            "Micronesia (Federal States of)",
            "Mongolia",
            "Myanmar",
            "Nauru",
            "Nepal",
            "New Zealand",
            "Pakistan",
            "Palau",
            "Papua New Guinea",
            "Philippines",
            "Republic of Korea",
            "Samoa",
            "Singapore",
            "Solomon Islands",
            "Sri Lanka",
            "Thailand",
            "Timor Leste",
            "Tonga",
            "Tuvalu",
            "Vanuatu",
            "Viet Nam",
        ];


        return view(
            'admin.create_meeting',
            compact('user', 'days_drop', 'meeting_room_drop', 'time_drop', 'country_drop', 'reserved_by')
        );
    }

    public function createMeetingRoom(Request $request)
    {

        $validateMeeting = $request->validate([
            'days_drop' => 'required|string',
            'meeting_room_drop' => 'required|string',
            'time_drop' => 'required|string',
            'country_drop' => 'required|string',
            'reserved_by' => 'required|string',
            'approval_status' => 'required|string',
        ]);


        $selectedDay = $request->input('days_drop');
        $selectedTime = $request->input('time_drop');

        if ($this->isTimeAlreadyReserved($selectedDay, $selectedTime)) {
            // The time is already reserved, return an error response
            return redirect()->back()->with('error', 'The selected time is already reserved on ' . $selectedDay . '. Please choose another time.');
        }
        $meeting_room = new SideMeeting($validateMeeting);
        $meeting_room->save();


        return redirect()->back();
    }

    // Function to check if the selected time is already reserved
    private function isTimeAlreadyReserved($selectedDay, $selectedTime)
    {
        // You need to replace this with your actual logic to check if the time is reserved
        // Example: Assuming there's a Reservation model with reserved times
        return SideMeeting::where('days_drop', $selectedDay)->where('time_drop', $selectedTime)->exists();
    }
}
