
                                <!-- Meeting Room F -->
                                <td class="{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room F')->count() > 0 ? 'active' : '' }}">
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room F')->count() > 0)
                                    @if($day5Meetings->where('meeting_room_drop', 'Meeting Room F')->first()->approval_status === 'For Decision')
                                    <h4>Decision Pending</h4>
                                    <div class="hover">
                                        <h4>Decision Pending</h4>
                                    </div>
                                    @else
                                    <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room F')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room F')->first()->country_drop }}</h4>
                                    <div class="hover">
                                        <h4>{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room F')->first()->reserved_by }}-{{ $day5Meetings->where('meeting_room_drop', 'Meeting Room F')->first()->country_drop }}</h4>
                                        <span>Reserved by: {{ $day5Meetings->where('meeting_room_drop', 'Meeting Room F')->first()->reserved_by }}</span>
                                    </div>
                                    @endif
                                    @endif
                                </td>
