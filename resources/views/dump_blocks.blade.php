<div class="row">
            <div class="col-md">
                <div class="schedule-table">
                    <table class="table bg-white">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Meeting Room A</th>
                                <th>Meeting Room B</th>
                                <th class="last">Meeting Room C</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $time_slots = [
                            "08:00-08:30", "08:30-09:00", "09:00-09:30", "09:30-10:00", "10:00-10:30",
                            "10:30-11:00", "11:00-11:30", "11:30-12:00", "12:00-12:30", "12:30-13:00",
                            "13:00-13:30", "13:30-14:00", "14:00-14:30", "14:30-15:00", "15:00-15:30",
                            "15:30-16:00", "16:00-16:30", "16:30-17:00", "17:00-17:30", "17:30-18:00",
                            ];
                            @endphp
                            @foreach($time_slots as $time_slot)
                            @php
                            $day5meetings = $meeting_rooms->where('days_drop', 'Day 5')->where('time_drop', $time_slot);
                            @endphp

                            <tr>
                                <td class="day">{{ $time_slot }}</td>
                                @if($day5meetings->count() > 0)
                                <!-- Meeting Room A -->
                                <td class="{{ $day5meetings->where('meeting_room_drop', 'Meeting Room A')->count() > 0 ? 'active' : '' }}">
                                    @if($day5meetings->where('meeting_room_drop', 'Meeting Room A')->count() > 0)
                                    <h4>{{ $day5meetings->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}-{{ $day5meetings->where('meeting_room_drop', 'Meeting Room A')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5meetings->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}-{{ $day5meetings->where('meeting_room_drop', 'Meeting Room A')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5meetings->where('meeting_room_drop', 'Meeting Room A')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>

                                <!-- Meeting Room B -->
                                <td class="{{ $day5meetings->where('meeting_room_drop', 'Meeting Room B')->count() > 0 ? 'active' : '' }}">
                                    @if($day5meetings->where('meeting_room_drop', 'Meeting Room B')->count() > 0)
                                    <h4>{{ $day5meetings->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}-{{ $day5meetings->where('meeting_room_drop', 'Meeting Room B')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5meetings->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}-{{ $day5meetings->where('meeting_room_drop', 'Meeting Room B')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5meetings->where('meeting_room_drop', 'Meeting Room B')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>

                                <!-- Meeting Room C -->
                                <td class="{{ $day5meetings->where('meeting_room_drop', 'Meeting Room C')->count() > 0 ? 'active' : '' }}">
                                    @if($day5meetings->where('meeting_room_drop', 'Meeting Room C')->count() > 0)
                                    <h4>{{ $day5meetings->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}-{{ $day5meetings->where('meeting_room_drop', 'Meeting Room C')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5meetings->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}-{{ $day5meetings->where('meeting_room_drop', 'Meeting Room C')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5meetings->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                </td>
                                @endif
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
