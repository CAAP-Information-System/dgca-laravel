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
            "Meeting Room 1 Jasmin",
            "Meeting Room 2 Lotus",
            "Meeting Room 3 Sampaguita",
            "Meeting Room 4 Benjarong Bangkok",
            "Meeting Room 5 Benjarong Phuket",
            "Meeting Room 6 Club Lounge Boardroom",
        ];
        $time_drop = [
            "---- Select TIME SLOT ----",
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
            "18:00-18:30",
            "18:30-19:00",
        ];
        $reserved_by = [
            "Australia", "Bangladesh", "Bhutan", "Brunei Darussalam", "Cambodia", "Canada", "China",
            "China – Hong Kong SAR", "China – Macao SAR", "Cook Islands", "Democratic People’s Republic Of Korea",
            "Fiji", "France", "French Polynesia", "India", "Indonesia", "Japan", "Kiribati",
            "Lao People’s Democratic Republic", "Malaysia", "Maldives", "Marshall Islands",
            "Micronesia (Federated States Of)", "Mongolia", "Nauru", "Nepal", "New Caledonia", "New Zealand",
            "Niue", "Pakistan", "Palau", "Papua New Guinea", "Philippines", "Republic Of Korea", "Samoa",
            "Singapore", "Solomon Islands", "Sri Lanka", "Thailand", "Timor-Leste", "Tonga", "Tuvalu",
            "United Kingdom", "United States Of America", "Vanuatu", "Viet Nam", "Wallis And Futuna Islands", "AAPA", "ACI", "CANSO", "EASA", "EUROCONTROL", "IATA", "IBAC", "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT", "ICCAIA", "IFALPA", "IFATCA", "IFATSEA", "PASO"
        ];
        $country_drop = [
            "Australia", "Bangladesh", "Bhutan", "Brunei Darussalam", "Cambodia", "Canada", "China",
            "China – Hong Kong SAR", "China – Macao SAR", "Cook Islands", "Democratic People’s Republic Of Korea",
            "Fiji", "France", "French Polynesia", "India", "Indonesia", "Japan", "Kiribati",
            "Lao People’s Democratic Republic", "Malaysia", "Maldives", "Marshall Islands",
            "Micronesia (Federated States Of)", "Mongolia", "Nauru", "Nepal", "New Caledonia", "New Zealand",
            "Niue", "Pakistan", "Palau", "Papua New Guinea", "Philippines", "Republic Of Korea", "Samoa",
            "Singapore", "Solomon Islands", "Sri Lanka", "Thailand", "Timor-Leste", "Tonga", "Tuvalu",
            "United Kingdom", "United States Of America", "Vanuatu", "Viet Nam", "Wallis And Futuna Islands",

            "AAPA", "ACI", "CANSO", "EASA", "EUROCONTROL", "IATA", "IBAC", "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT", "ICCAIA", "IFALPA", "IFATCA", "IFATSEA", "PASO"
        ];
        $country_drop = [
            "Australia", "Bangladesh", "Bhutan", "Brunei Darussalam", "Cambodia", "Canada", "China",
            "China – Hong Kong SAR", "China – Macao SAR", "Cook Islands", "Democratic People’s Republic Of Korea",
            "Fiji", "France", "French Polynesia", "India", "Indonesia", "Japan", "Kiribati",
            "Lao People’s Democratic Republic", "Malaysia", "Maldives", "Marshall Islands",
            "Micronesia (Federated States Of)", "Mongolia", "Nauru", "Nepal", "New Caledonia", "New Zealand",
            "Niue", "Pakistan", "Palau", "Papua New Guinea", "Philippines", "Republic Of Korea", "Samoa",
            "Singapore", "Solomon Islands", "Sri Lanka", "Thailand", "Timor-Leste", "Tonga", "Tuvalu",
            "United Kingdom", "United States Of America", "Vanuatu", "Viet Nam", "Wallis And Futuna Islands",

            "AAPA", "ACI", "CANSO", "EASA", "EUROCONTROL", "IATA", "IBAC", "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT", "ICCAIA", "IFALPA", "IFATCA", "IFATSEA", "PASO"
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
            "Meeting Room 1 - Jasmin",
            "Meeting Room 2 - Lotus",
            "Meeting Room 3 - Sampaguita",
            "Meeting Room 4 - Benjarong Bangkok",
            "Meeting Room 5 - Benjarong Phuket",
            "Meeting Room 6 - Club Lounge Boardroom",
        ];
        $time_drop = [
            "---- Select TIME SLOT ----",
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
            "18:00-18:30",
            "18:30-19:00",
        ];
        $reserved_by = [
            "---- COUNTRIES ----",
            "Australia", "Bangladesh", "Bhutan", "Brunei Darussalam", "Cambodia", "Canada", "China",
            "China – Hong Kong SAR", "China – Macao SAR", "Cook Islands", "Democratic People’s Republic Of Korea",
            "Fiji", "France", "French Polynesia", "India", "Indonesia", "Japan", "Kiribati",
            "Lao People’s Democratic Republic", "Malaysia", "Maldives", "Marshall Islands",
            "Micronesia (Federated States Of)", "Mongolia", "Nauru", "Nepal", "New Caledonia", "New Zealand",
            "Niue", "Pakistan", "Palau", "Papua New Guinea", "Philippines", "Republic Of Korea", "Samoa",
            "Singapore", "Solomon Islands", "Sri Lanka", "Thailand", "Timor-Leste", "Tonga", "Tuvalu",
            "United Kingdom", "United States Of America", "Vanuatu", "Viet Nam", "Wallis And Futuna Islands",
            "---- ORGANIZATIONS ----",
            "AAPA",
            "ACI",
            "CANSO",
            "EASA",
            "EUROCONTROL",
            "IATA",
            "IBAC",
            "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT",
            "ICCAIA",
            "IFALPA",
            "IFATCA",
            "IFATSEA",
            "PASO",
        ];
        $country_drop = [
            "---- COUNTRIES ----",
            "Australia", "Bangladesh", "Bhutan", "Brunei Darussalam", "Cambodia", "Canada", "China",
            "China – Hong Kong SAR", "China – Macao SAR", "Cook Islands", "Democratic People’s Republic Of Korea",
            "Fiji", "France", "French Polynesia", "India", "Indonesia", "Japan", "Kiribati",
            "Lao People’s Democratic Republic", "Malaysia", "Maldives", "Marshall Islands",
            "Micronesia (Federated States Of)", "Mongolia", "Nauru", "Nepal", "New Caledonia", "New Zealand",
            "Niue", "Pakistan", "Palau", "Papua New Guinea", "Philippines", "Republic Of Korea", "Samoa",
            "Singapore", "Solomon Islands", "Sri Lanka", "Thailand", "Timor-Leste", "Tonga", "Tuvalu",
            "United Kingdom", "United States Of America", "Vanuatu", "Viet Nam", "Wallis And Futuna Islands",
            "---- ORGANIZATIONS ----",
            "AAPA",
            "ACI",
            "CANSO",
            "EASA",
            "EUROCONTROL",
            "IATA",
            "IBAC",
            "ICAO – ASIAN GROUP (Montreal Group)",
            "ICAO – SECRETARIAT",
            "ICCAIA",
            "IFALPA",
            "IFATCA",
            "IFATSEA",
            "PASO",
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
            'meeting_room_drop' => 'required|string', // This is used as the room ID
            'time_drop' => 'required|string',
            'country_drop' => 'required|string',
            'reserved_by' => 'required|string',
            'approval_status' => 'required|string',
        ]);

        $selectedDay = $request->input('days_drop');
        $selectedRoomId = $request->input('meeting_room_drop'); // Use this as the room ID
        $selectedTime = $request->input('time_drop');

        if ($this->isTimeAlreadyReserved($selectedDay, $selectedTime, $selectedRoomId)) {
            // The time is already reserved for this room, return an error response
            return redirect()->back()->with('error', 'The selected time is already reserved for this room on ' . $selectedDay . '. Please choose another time or room.');
        }
        $meeting_room = new SideMeeting($validateMeeting);
        $meeting_room->save();

        return redirect()->route('meeting-published');
    }

    // Adjusted function to check if the selected time is already reserved for a specific room
    private function isTimeAlreadyReserved($selectedDay, $selectedTime, $selectedRoomId)
    {
        return SideMeeting::where('days_drop', $selectedDay)
            ->where('time_drop', $selectedTime)
            ->where('meeting_room_drop', $selectedRoomId) // Check against the specific room ID
            ->exists();
    }
    public function deleteMeetingRoom(Request $request, $id)
    {
        // Find the meeting by its ID
        $meeting = SideMeeting::findOrFail($id);

        // Delete the meeting
        $meeting->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Meeting deleted successfully.');
    }
    public function publishedMeeting()
    {
        return view('http-message.meeting_published');
    }
}
