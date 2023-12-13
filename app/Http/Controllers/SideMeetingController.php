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

        $meeting_rooms = SideMeeting::all();
        return view('main.meeting_room', compact('user', 'days_drop', 'meeting_room_drop', 'time_drop', 'meeting_rooms'));
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

        return view('admin.create_meeting',
        compact('user','days_drop','meeting_room_drop','time_drop'));
    }

    public function createMeetingRoom(Request $request)
    {
        $user = Auth::user();

        $validateMeeting = $request->validate([
            'days_drop' => 'required|string',
            'meeting_room_drop' => 'required|string',
            'time_drop' => 'required|string',
            'reserved_by' => 'required|string',
            'reservee' => 'required|string',
        ]);

        $meeting_room = new SideMeeting($validateMeeting);
        $meeting_room->save();

        return redirect()->back();
    }
}
