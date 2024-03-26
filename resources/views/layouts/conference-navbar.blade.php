<link rel="stylesheet" type="text/css" href="{{ url('css/conference-nav.css') }}">
<div class="main-conf-nav">
            <nav class="conf-nav">
                <ul>
                    <li class="dropdown1">
                        <a>
                            <i class="fa-solid fa-users"></i>
                            <span class="label">Conference</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('message') }}">Welcome Message</a>
                            <a href="{{ route('agenda') }}">Agenda</a>
                            <a href="{{ route('order-of-business') }}">Order of Business</a>
                            <a href="#">Participant List</a>
                            <a href="#">Conclusions</a>
                            <a href="{{ route('the-gallery') }}">The Gallery</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('meeting-room') }}">
                            <i class="fa-solid fa-handshake"></i>
                            <span class="label">Side Meeting</span>
                        </a>
                    </li>
                    <li class="dropdown1">
                        <a>
                            <i class="fa-solid fa-user-tie"></i>
                            <span class="label">Delegate's Corner</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('bulletin') }}">Conference Bulletin</a>
                            <a href="https://dfa-oca.ph/visa/visa-general-info/" target="_blank">VISA Information</a>
                            <a href="{{ route('transport-schedule') }}">Transport Schedule</a>
                            <a href="{{ route('venue') }}">Venue Information</a>
                            <a href="{{ route('hotel-recommendations') }}">Hotel Recommendations</a>
                            <a href="{{ route('medical-support') }}">Medical Support</a>
                            <a href="{{ route('useful-tips') }}">Useful Tips</a>
                        </div>
                    </li>
                    <li class="dropdown1">
                        <a>
                            <i class="fa-solid fa-folder-open"></i>
                            <span class="label">Documents</span>
                        </a>
                        <div class="dropdown-content">
                            <!-- <a href="#">My Documents</a> -->
                            <a href="{{ route('disc-paper') }}">Discussion Papers</a>
                            <a href="{{ route('info-paper') }}">Information Papers</a>
                            <a href="{{ route('view-submission') }}">Submission Guide</a>
                            <a href="{{ route('create.file') }}">Submit Document</a>
                        </div>
                    </li>
                    @if(auth()->check() && auth()->user()->access_role == "media")
                    <li class="dropdown1">
                        <a href="#" class="text-danger">
                            <i class="fa-solid fa-hashtag"></i>
                            <span class="label">Media</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('create-news') }}">Create News</a>
                            <a href="{{ route('create-gallery') }}">Upload Gallery</a>
                            <a href="{{ route('media-dashboard') }}">Check Dashboard</a>
                        </div>
                    </li>
                    @elseif(auth()->check() && auth()->user()->access_role == "icao")
                    <li class="dropdown1">
                        <a href="#" class="text-danger">
                            <i class="fa-solid fa-hashtag"></i>
                            <span class="label">ICAO</span>
                        </a>
                        <div class="dropdown-content">
                            <a href="{{ route('files') }}">View Files</a>
                            <a href="{{ route('meeting-reservations') }}">Meeting Reservation</a>
                            <a href="{{ route('account_list') }}">Accounts Registered</a>

                        </div>
                    </li>
                    @endif
                </ul>
            </nav>

        </div>
