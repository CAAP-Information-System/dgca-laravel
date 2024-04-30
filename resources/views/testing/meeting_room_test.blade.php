                                <!-- Meeting Room C -->
                                <td class="{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room C')->count() > 0 ? 'active' : '' }}">
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room C')->count() > 0)
                                    @if($day1Meetings->where('meeting_room_drop', 'Meeting Room C')->first()->approval_status === 'For Decision')
                                    <h4 class="decision-pending">Decision Pending</h4>
                                    @else
                                    <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room C')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}-{{ $day1Meetings->where('meeting_room_drop', 'Meeting Room C')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day1Meetings->where('meeting_room_drop', 'Meeting Room C')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
