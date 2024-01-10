<nav class="welcome-navbar" id="subnavbar">
                <ul class="navbar-links">
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Conference</a>
                        <div class="dropdown">
                            <a class="sub" href="{{ route('welcome') }}">Welcome Message</a>
                            <a class="sub" href="{{ route('agenda') }}">Agenda</a>
                            <a class="sub" href="#">Programme</a>
                            <a class="sub" href="{{ route('participants') }}">Participants</a>
                            <a class="sub" href="{{ route('the-gallery') }}">The Gallery</a>
                        </div>
                    </li>

                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="{{ route('meeting-room') }}">Side Meeting</a>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Documents</a>
                        <div class="dropdown">
                            <a class="sub" href="{{ route('disc-paper') }}">Discussion</a>
                            <a class="sub" href="{{ route('info-paper') }}">Information</a>
                            <a class="sub" href="#">Paper Submission Guide</a>

                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Events</a>
                        <div class="dropdown">
                            <a class="sub" href="#">Social/Cultural Function</a>

                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Exhibits and Sponsors</a>
                        <div class="dropdown">
                            <a class="sub" href="#">Floor Plan</a>
                            <a class="sub" href="#">Exhibit Services</a>
                            <a class="sub" href="#">Exhibition Registration</a>
                            <a class="sub" href="#">Our Sponsors</a>
                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="#">Delegate's Corner</a>
                        <div class="dropdown">
                            <a class="sub" href="{{ route('bulletin') }}">Conference Bulletin</a>
                            <a class="sub" href="#">Transport Schedule</a>
                            <a class="sub" href="#">Venue</a>
                            <a class="sub" href="#">Registration</a>
                            <a class="sub" href="#">Other Notices</a>
                        </div>
                    </li>
                    <li class="navbar-dropdown">
                        <a class="navbar-main" href="https://beta.tourism.gov.ph/about-the-philippines/" target="_blank">About Philippines</a>
                    </li>
                </ul>
            </nav>
