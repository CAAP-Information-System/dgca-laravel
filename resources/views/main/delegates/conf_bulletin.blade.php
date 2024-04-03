@extends('layouts.app')
<title>@yield('title', 'Conference Bulletin-59th DGCA')</title>
@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/bulletin.css') }}">

@include('main.banner', ['bannerTitle' => 'Conference Bulletin'])

<div class="container">
    <div class="bulletin-intro">
        <p class="welcome2ph">Welcome to the Philippines</p>
        <p class="intro-desc">
            The Philippines is a diverse and vibrant country known for its rich cultural heritage, stunning
            beaches, and diverse food selection. Whether you're visiting for business or leisure, this
            information sheet will help you make the most of your trip.
        </p>
    </div>

    <section class="bulletin-content">
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/venue.png') }}" alt="venue" class="bullet-img">
                Conference Venue
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    The 59th Directors General Conference on Civil Aviation will be held on <b class="text-primary">14 – 18 October
                        2024</b> at Dusit Thani, Mactan Cebu, Philippines.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/flight-plane.svg') }}" alt="venue" class="bullet-img">
                Flight Information
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        After completing the online registration process, delegates, along with their accompanying persons and spouses, are required to register their flight information as requested by the logistics team. This step ensures that your arrival time is carefully monitored.
                    </p>
                    <p>
                        The form becomes accessible once the delegate has successfully completed their online registration process.
                    </p>

                    @if(auth()->check())
                    <p>
                        If online registration is complete, you can copy and paste the link for the accompanying person/spouse please follow the flight information form link given below:
                    </p>
                    <div class="flight_info_link_container">
                        <header class="form_link_hdr text-primary">Delegate's Flight Information</header>
                        <div class="form_link_ctn">
                            <a href="{{ route('delegate-flight-information') }}" class="form_link_btn"><i class="fa-solid fa-rectangle-list"></i> Delegate's Form</a>
                        </div>

                        <header class="form_link_hdr text-primary">Accompanying Person/Spouse's Flight Information</header>
                        <div class="form_link_ctn">
                            <a href="{{ route('accompany-flight-information') }}" class="form_link_btn"><i class="fa-solid fa-rectangle-list"></i> Accompanying Person/Spouse's Form</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="bulletin-grp ">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/visa.png') }}" alt="passport-visa" class="bullet-img">
                Passport and Visa Requirements
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    All foreign visitors to Philippines must ensure their passports, travel documents, and visas have a <b class="text-primary">minimum validity of six (6) months </b>from their arrival date. While visa on arrival is an option for select countries, please refer to the conference website for comprehensive visa requirements based on nationality.
                    <br><br>
                    <p>
                        For further details, kindly inquire with the <a href="https://immigration.gov.ph/contacts/">Bureau of Immigration</a>, or reach out to your nearest Philippine Diplomatic or Consular Missions. Any questions regarding visa requirements can be directed to us via email at <a href="#">dgca59_secretariat@caap.gov.ph</a>.
                    </p>
                    <br>
                    <label for="">For more information kindly visit:</label>
                    <div class="visa-grp">
                        <a href="https://dfa-oca.ph/visa/visa-general-info/" target="_blank" class="visa-link">
                            DFA VISA Requirements
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/side-meetings.png') }}" alt="baggage" class="bullet-img">
                Schedule of Meetings
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        The opening ceremony of the event, keynotes addresses, as well as the opening of the
                        exhibition area is scheduled to commence on Monday, 14 October 2024 at 09:00 hrs
                    </p>
                    <p>
                        The <b class="text-primary">conference</b> is scheduled to commence on Monday, 14 October 2024 at 09:00 hrs.
                    </p>
                    <p>
                        The <b class="text-primary">Gala Dinner</b> is scheduled for the evening of Tuesday, 15 October 2024 at
                        (__________),(further details will be provided)
                    </p>

                </div>
            </div>
        </div>
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/luggage.png') }}" alt="baggage" class="bullet-img">
                Baggage Identification
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div> -->

        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/agenda.png') }}" alt="baggage" class="bullet-img">
                Agenda and Programme
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    The preliminary agenda and tentative program, along with any updates, will be posted on the <b class="text-primary">DGCA59 Conference Website</b> as soon as they are finalized and ready for distribution.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/participants.png') }}" alt="baggage" class="bullet-img">
                Participant Registration
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Participants should register online the ICAO events webpage at
                    <a href="{{ route('register') }}" target="_blank">59th DGCA Registration</a>.

                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/documentation.png') }}" alt="baggage" class="bullet-img">
                Documentation
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Please note that no documentation will be available in hard copy format. Details regarding
                    the event and upload of presentations after the event will be available on the
                    <a href="{{ route('view-submission') }}" target="_blank">Submission Guidance Page</a>.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/papers.png') }}" alt="baggage" class="bullet-img">
                Conference Paper
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    As Discussion Papers (DPs) and Information Papers (IPs) become accessible, they will be uploaded to the conference website. In line with our commitment to sustainability, physical copies of DPs/IPs will not be distributed unless requested. We encourage participants to retrieve conference materials directly from the website for environmental considerations.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/email.png') }}" alt="baggage" class="bullet-img">
                Website and Emails
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <li>Conference Website: <a href="#" class="bullet-email">dgca59.gov.ph</a></li>
                    <li>Conference Secretariat: <a href="#" class="bullet-email">dgca59_secretariat@caap.gov.ph</a></li>
                    <li>Conference Registration Team: <a href="#" class="bullet-email">dgca59_registration@caap.gov.ph</a></li>
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/hotel.png') }}" alt="baggage" class="bullet-img">
                Hotel Reservation
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Participants are requested to ensure that their return airline booking is confirmed. Details of
                    the hotel, where the event will be held, along with other hotels within the vicinity providing
                    preferential/corporate rates is available under the <a href="{{ route('hotel-recommendations') }}">Hotel Recommendations</a> and <a href="https://dfa-oca.ph/visa/visa-general-info/">VISA Information</a> page of the event website. <b class="text-primary">Participants are responsible for their own hotel and travel
                        reservations.</b>
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/insurance.png') }}" alt="baggage" class="bullet-img">
                Insurances
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Participants are advised to have insurance coverage for any unexpected contingency including transport hazards (taxi, buses, rented cars, etc.) and Medical Coverage.

                </div>
            </div>
        </div>
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/dress-code.png') }}" alt="baggage" class="bullet-img">
                Event Dress Coding
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

                </div>
            </div>
        </div> -->
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/wifi.png') }}" alt="baggage" class="bullet-img">
                Wifi and Network
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Free Wi-Fi accessibility will be available throughout the conference venue. Access details will be distributed during the event. In addition, the internet facilities will be accessible for delegates on-site. Participants are advised to <b class="text-primary">bring their own laptops to access conference materials</b>.
                </div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/secretariat.png') }}" alt="baggage" class="bullet-img">
                Conference Secretariat
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    The ICAO Asia and Pacific Regional Office, along with the Civil Aviation Authority of the Philippines, will serve as the secretariat for the conference. For all inquiries and general correspondence, please direct your communication to <a href="#">dgca59_secretariat@caap.gov.ph</a>, ensuring to cc <a href="#">apac@icao.int</a>.
                </div>
            </div>
        </div>
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/side-meetings.png') }}" alt="baggage" class="bullet-img">
                Side Meeting Rooms
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <b class="text-primary">Three (3) meeting rooms</b> will be provided for conducting bilateral meetings as needed; however, it's essential to book in advance to ensure availability and reservation of the rooms.
                    <br><br>
                    To inquire about availability and secure the rooms for any proposed meetings, kindly send an email with your request to: <br><a href="#">secretariat-email@email.com</a>.

                </div>
            </div>
        </div> -->
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/meals.png') }}" alt="baggage" class="bullet-img">
                Meals and Refreshments
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Refreshments during mid-morning and mid-afternoon breaks and a working lunch will be provided for all delegates during each day of the conference.</div>
            </div>
        </div> -->
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/social-event.png') }}" alt="baggage" class="bullet-img">
                Social Events
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div> -->

        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/transportation.png') }}" alt="baggage" class="bullet-img">
                Transportation
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Participants are requested to make their own arrangements for transportation from the airport to the city and return. <b class="text-primary">Some hotels offer airport transfers</b>.
                </div>
            </div>
        </div>
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/telephone-service.png') }}" alt="baggage" class="bullet-img">
                Telephone Service
            </header>
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div> -->
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/travel-service.png') }}" alt="baggage" class="bullet-img">
                Travel Service
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">If you need any assistance with arranging private pre- or post-conference tours and excursions tailored to your preferences, please feel free to inquire at the Concierge Desk of your hotel.</div>
            </div>
        </div>
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/other-info.png') }}" alt="baggage" class="bullet-img">
                Other Information
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    The Conference website offers additional valuable and up-to-date information. Any updates or changes will be reflected in the Conference Bulletin and Notice Board.
                </div>
            </div>
        </div>
        <div class="backtotop-container">
            <a href="#" class="backtotop">Back to Top</a>
        </div>
    </section>

</div>
<script src="{{ asset('js/welcome/scroll.js') }}"></script>
<script>
    // All this jquery is just used for presentation. Not required at all for the radio buttons to work.
    $(document).ready(function() {
        //   Hide the border by commenting out the variable below
        var $on = 'section';
        $($on).css({
            'background': 'none',
            'border': 'none',
            'box-shadow': 'none'
        });
    });
</script>

@endsection
