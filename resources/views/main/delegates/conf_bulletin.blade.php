@extends('layouts.app')
<title>@yield('title', 'Conference Bulletin-59th DGCA')</title>
@section('content')

<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/bulletin.css') }}">

@include('main.banner', ['bannerTitle' => 'Conference Bulletin'])

<div class="container">
    <div class="bulletin-intro animate-fade-left animate-delay-0 animate-ease-out">
        <p class="welcome2ph">Welcome to the Philippines</p>
        <p class="intro-desc">
            The Philippines is a diverse and vibrant country known for its rich cultural heritage, stunning
            beaches, and diverse food selection. Whether you're visiting for business or leisure, this
            information sheet will help you make the most of your trip.
        </p>
    </div>

    <section class="bulletin-content">
        <div class="bulletin-grp" data-aos="fade-up">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/venue.png') }}" alt="venue" class="bullet-img">
                Dates and Venue
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        The 59th Conference of the Directors General Conference ofn Civil Aviation, Asia and Pacific Region (DGCA/59) will be held from <b class="text-primary">14-18 October 2024</b> at Dusit Thani, Mactan Cebu, Philippines.
                    </p>
                    <br><br>
                    <p>
                        Participants can access the draft programme of the conference from the website of DGCA/59 Asia Pacific: <a href="https://dgca59.ph/home">https://dgca59.ph/home</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="bulletin-grp" data-aos="fade-up">
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
        <div class="bulletin-grp " data-aos="fade-up">
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

        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/side-meetings.png') }}" alt="schedule of meetings" class="bullet-img">
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
                    <br>
                    <p>
                        The <b class="text-primary">Gala Dinner</b> is scheduled for the evening of Tuesday, 15 October 2024 at
                        (__________),(further details will be provided)
                    </p>

                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/register-bullet.png') }}" alt="register" class="bullet-img">
                Registration Procedure Guidelines
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        Delegates are advised to undergo an initial registration through this website: <a href="https://dgca59.ph/register">https://dgca59.ph/register</a> prior participating in the conference.
                    </p>
                    <br>
                    <p>
                        Once complete with the online registration, the website administrator will verify the account and shall provide notification via email for the successful online registration.
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

        <div data-aos="fade-up" class="bulletin-grp">
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
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/participants.png') }}" alt="baggage" class="bullet-img">
                Registration of Conference Participants
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        States/Administrations and invited Organizations are requested to send the list of names of their authorized delegates to the ICAO APAC Office by email to apac@icao.int with a copy to <b class="text-primary"><a href="mailto:dgca59_registration@caap.gov.ph?subject=Your%20Subject&body=Your%20message%20here">dgca59_registration@caap.gov.ph</a></b>
                        prior to any individual registration. It is recommended that delegates register online before 4 October 2024. The Registration Form is available on the conference website.
                    </p>
                    <br><br>
                    <p>
                        Participants who have already completed online registration are requested to register at the Secretariat's Desk on-site at the conference venue from 14:00 – 18:00 hours on 13 October 2024, the day before the conference, and during 08:00 – 09:00 hours on day one of the conference. Participants are also requested to always wear the identification badge inside the venue.
                    </p>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/focal-person.svg') }}" alt="focal-person" class="bullet-img">
                Focal Point of Contact for the Conference
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        The focal points of contact for the conference are:
                    </p>
                    <br><br>
                    <p>
                    <header><b>Civil Aviation Authority of the Philippines (CAAP)</b></header>
                    <div class="contact-info">
                        <p><span>Name:</span> Ms. Maria Edda M. Lamarca</p>
                        <p><span>Designation:</span> Chief, Office of the International Civil Aviation Coordinating Staff (ICACS)</p>
                        <p><span>Telephone No.:</span> +63 2 8246 4988 <span>local 2019</span></p>
                        <p><span>E-mail:</span> <a href="mailto:icacs@caap.gov.ph">icacs@caap.gov.ph</a></p>
                    </div>
                    </p>
                    <br>
                    <p>
                    <header><b>ICAO Asia and Pacific Regional Office </b></header>
                    <div class="contact-info">
                        <p><span>Name:</span> Mr. Peter Dunda</p>
                        <p><span>Designation:</span> Regional Officer Aeronautical Meteorology and Environment</p>
                        <p><span>Telephone No.:</span> + 66 2 537 8189</p>
                        <p><span>E-mail:</span> <a href="mailto:apac@icao.int ">apac@icao.int </a></p>
                    </div>
                    </p>
                    <p>
                        The Civil Aviation Authority of the Philippines (CAAP) will provide the conference's daily secretarial and administrative logistics support.
                    </p>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/accompanying-person.png') }}" alt="baggage" class="bullet-img">
                Accompanying Persons Programme
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        A social programme for the delegates' accompanying persons and spouses is organized for those interested in participating. The detailed programme will be made available on the conference website.
                    </p>
                    <p>
                        Delegates are requested to ensure all accompanying persons/spouses are registered during the delegate's online registration or provide their details as early as possible for administrative/logistical requirements. The registration of accompanying persons is necessary to secure their place on the dedicated programmes.
                    </p>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/documentation.png') }}" alt="baggage" class="bullet-img">
                Documentation
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    Please note that no documentation will be available in hard copy format.
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
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
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/email.png') }}" alt="baggage" class="bullet-img">
                Website and Emails
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <li>Conference Website: <a href="https://dgca59.ph" class="bullet-email">www.dgca59.ph</a></li>
                    <li>Conference Secretariat: <a href="#" class="bullet-email">dgca59_secretariat@caap.gov.ph</a></li>
                    <li>Conference Registration Team: <a href="#" class="bullet-email">dgca59_registration@caap.gov.ph</a></li>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/travel-service.png') }}" alt="travel-service" class="bullet-img">
                Travel Service
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">If you need any assistance with arranging private pre- or post-conference tours and excursions tailored to your preferences, please feel free to inquire at the Concierge Desk of your hotel.</div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/travel-info.png') }}" alt="travel-info" class="bullet-img">
                Travel Information
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        Delegates are responsible for their own travel arrangements, including air transportation, visa, hotel reservation, and travel/medical insurance.
                    </p>
                    <br>
                    <p>
                        All delegates are advised to keep the CAAP informed of their arrival flight itinerary for airport reception and transfer to their hotel. CAAP will provide land transfers to/from the hotel venue to delegates arriving at/departing Mactan-Cebu International Airport. Please submit flight itineraries to the Conference Secretariat at dgca59_secretariat@caap.gov.ph and cc: dgca59_registration@caap.gov.ph at your earliest convenience.
                    </p>
                    <br>
                    <p>
                        All foreign nationals entering the Philippines must bear passports with expiration dates not earlier than six (6) months from before the date of arrival into the Philippines.
                    </p>
                    <br>
                    <p>
                        The delegates may apply for visas at the nearest Embassy of the Philippines or Consulate and inform the CAAP Conference Secretariat for visa and arrival facilitation.
                    </p>
                    <br>
                    <p>
                        All international travellers must fill out and submit the Philippines eTravel for the following, using this link: <a href="https://etravel.gov.ph/?fbclid=IwAR2vYxlWvZye8afEzOyo2d4uI3yVfjqhwU8oq7s-lxQlH4eWbhDgzQOPkes">https://etravel.gov.ph/</a>
                    <p>
                        <br>
                    <ul>
                        • To enter the Philippines
                        <br>
                        • To depart from the Philippines
                    </ul>
                    </p>
                    <p>
                        A list of countries with visa exemption can be accessed at <a href="https://dfa.gov.ph/list-of-countries-for-21-day-visa">https://dfa.gov.ph/list-of-countries-for-21-day-visa</a>. Citizen of member States of the Association of Southeast Asian Nations (ASEAN) are entitled to visa exemption.
                    </p>

                    </p>
                    <p></p>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/hotel.png') }}" alt="hotel-accomodation" class="bullet-img">
                Accomodations
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        The conferencevenue hotel is recommended with special rate as follows:
                    </p>
                    <section>
                        <div class="accomodation-header">
                            <h1>Dusit Thani Mactan</h1>
                        </div>

                        <hr>

                        <table class="contact-info">
                            <tr>
                                <td>
                                    <p class="star-rating">★★★★★</p>
                                    <p>Punta Engaño Rd, Mactan Island, Lapu-Lapu City, Cebu</p>
                                    <p>T: +63 32 888 1388</p>
                                    <p>W: <a href="https://www.dusit.com/dusitthani-mactancebu/" class="link">https://www.dusit.com/dusitthani-mactancebu/</a></p>
                                </td>
                            </tr>
                        </table>

                        <table class="rates-table">
                            <thead>
                                <tr>
                                    <th>Room type</th>
                                    <th>Superior Garden<br>2 Twin / 1 King Bed</th>
                                    <th>Superior Seaview<br>2 Twin / 1 King Bed</th>
                                    <th>Superior Club Seaview<br>2 Twin / 1 King Bed</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Rate</td>
                                    <td>Php 7,000</td>
                                    <td>Php 10,000</td>
                                    <td>Php 12,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Inclusions: (breakfast, internet)</p>
                                        <p>Rate includes buffet breakfast and internet.</p>
                                        <p>Exclusions: (tax, service charge)</p>

                                    </td>
                                    <td colspan="3">
                                        <p>Rate includes buffet breakfast and internet</p>
                                        <p>Rate excludes 12% VAT, 10% service charge, and 0.83% local tax.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="inclusions">

                        </table>
                    </section>
                    <br><br>
                    <section>
                        <div class="accomodation-header">
                            <h1>Nearest Hotels</h1>
                        </div>
                        <table class="hotel-table">

                            <thead>
                                <tr>
                                    <th>Hotel</th>
                                    <th>Room Type</th>
                                    <th>Room Rate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>Shangri-La Mactan</strong><br>
                                        Punta Engaño Rd, Mactan Island, Lapu-Lapu City, Cebu<br>
                                        T: +63 32 231 0288<br>
                                        W: <a href="https://www.shangri-la.com/en/cebu/mactanresort/" class="link">https://www.shangri-la.com/en/cebu/mactanresort/</a><br>
                                        Distance: 3.9 kms - away from the venue (10 min)<br>
                                        <span class="star-rating">★★★★★</span>
                                    </td>
                                    <td>
                                        Deluxe Seaview<br>
                                        2 Twin / 1 King Bed<br><br>
                                        Deluxe/Premier<br>
                                        2 Twin / 1 King Bed
                                    </td>
                                    <td>
                                        Php 12,455.00<br><br><br>
                                        Php 10,500.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Savoy Hotel Mactan</strong><br>
                                        The Mactan Newtown, Newtown Boulevard, Lapu-Lapu City, Cebu<br>
                                        T: +63 32 494 4000<br>
                                        W: <a href="https://savoyhotelmactan.com.ph/" class="link">https://savoyhotelmactan.com.ph/</a><br>
                                        Distance: 5.5 kms - away from the venue (14 min)<br>
                                        <span class="star-rating">★★★★</span>
                                    </td>
                                    <td>
                                        Junior Suite<br>
                                        1 Queen Bed<br><br>
                                        Deluxe Premier<br>
                                        1 Queen Bed<br><br>
                                        Superior Deluxe<br>
                                        2 Twin / 1 Queen Bed
                                    </td>
                                    <td>
                                        Php 7,500.00<br><br><br>
                                        Php 4,700.00<br><br><br>
                                        Php 3,300.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Belmont Hotel Mactan</strong><br>
                                        The Mactan Newtown, Newtown Boulevard, Lapu-Lapu City, Cebu<br>
                                        T: +63 32 520 4100<br>
                                        W: <a href="https://belmontmactan.com.ph/" class="link">https://belmontmactan.com.ph/</a><br>
                                        Distance: 5.6 kms - away from the venue (15 min)<br>
                                        <span class="star-rating">★★★★</span>
                                    </td>
                                    <td>
                                        Junior Suite<br>
                                        1 King Bed<br><br>
                                        Deluxe Premier<br>
                                        1 Queen Bed<br><br>
                                        Superior Deluxe<br>
                                        1 Queen Bed
                                    </td>
                                    <td>
                                        Php 8,000.00<br><br><br>
                                        Php 6,500.00<br><br><br>
                                        Php 5,000.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Tambuli Seaside Resort and Spa</strong><br>
                                        Buyong Rd, Maribago, Lapu-Lapu City, Cebu<br>
                                        T: +63 32 236 0888<br>
                                        W: <a href="https://tambuliseasideresortandspa.com/" class="link">https://tambuliseasideresortandspa.com/</a><br>
                                        Distance: 9.1 kms - away from the venue (23 min)<br>
                                        <span class="star-rating">★★★★</span>
                                    </td>
                                    <td>
                                        Premier Suite<br>
                                        1 King Bed<br><br>
                                        Suite<br>
                                        1 Queen Bed<br><br>
                                        Deluxe Studio<br>
                                        1 Queen Bed
                                    </td>
                                    <td>
                                        Php 11,900.00<br><br><br>
                                        Php 9,800.00<br><br><br>
                                        Php 7,000.00
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>BE Resort Mactan</strong><br>
                                        Punta Engaño Rd, Lapu-Lapu City, Cebu<br>
                                        T: +63 32 236 8888<br>
                                        W: <a href="https://beresortmactan.com/ " class="link">https://beresortmactan.com/ </a><br>
                                        Distance: 2.8 kms. away from the venue (7 min)<br>
                                        <span class="star-rating">★★★</span>
                                    </td>
                                    <td>
                                        BE Classy Seaview<br>
                                        1 King Bed<br><br>
                                        BE Chic Pool View<br>
                                        2 Queen Bed<br><br>
                                        BE Cool City View<br>
                                        2 Queen Bed
                                    </td>
                                    <td>
                                        Php 7,000.00 <br><br><br>
                                        Php 5,500.00 <br><br><br>
                                        Php 4,800.00
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                    <p>
                        CAAP will provide return ground transport for the participants between the airport and their hotels, and between their hotels and the conference venue.
                    </p>
                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
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
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/dress-code.png') }}" alt="baggage" class="bullet-img">
                Event Dress Coding
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        The recommended dress code for the conference's Opening Ceremony would be formal attire or national dress. For the rest of the conference, delegates may be in business attire. Smart casual wear is recommended for social functions during the conference. In addition, comfortable casual wear would be ideal on the day of the delegates' cultural tour.
                    </p>

                </div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
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
        <div data-aos="fade-up" class="bulletin-grp">
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
        <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/meals.png') }}" alt="baggage" class="bullet-img">
                Meals and Refreshments
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Refreshments during breaks and lunch for all delegates will be provided complimentary during each day of the events.</div>
            </div>
        </div>
        <!-- <div class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/social-event.png') }}" alt="baggage" class="bullet-img">
                Social Events
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
            </div>
        </div> -->

        <div data-aos="fade-up" class="bulletin-grp">
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
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/travel-service.png') }}" alt="baggage" class="bullet-img">
                Travel Service
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">If you need any assistance with arranging private pre- or post-conference tours and excursions tailored to your preferences, please feel free to inquire at the Concierge Desk of your hotel.</div>
            </div>
        </div>
        <div data-aos="fade-up" class="bulletin-grp">
            <header class="bullet-hdr">
                <img src="{{ asset('img/icon/other-info.png') }}" alt="baggage" class="bullet-img">
                Other Information
            </header>
            <div class="bullet-details">
                <div class="bullet-desc">
                    <p>
                        <b class="text-primary">Language:</b> Filipino, the standardized form of Tagalog, is the national language of the Philippines. Cebuano or Bisaya is the second most spoken language in the Philippines after Tagalog and the language of Visayan islands, like Cebu. However, the locals can also speak in English.
                    </p>
                    <br>
                    <p>
                        <b class="text-primary">Currency and Money Exchange:</b> The local currency is the Philippine Peso (PHP). The approximate currency exchange rate in October 2024 is 1 USD = Php 57. Credit cards (American Express, Visa, and Mastercard) are acceptable in hotels and shopping malls. There are money exchange companies and commercial banks both in arrival and departure at the International Airport. ATMs are available in the malls and around the Metro.
                    </p>
                    <br>
                    <p>
                        <b class="text-primary">SIM Card:</b> International SIM cards are available in the arrival passenger lounge.
                    </p>
                    <br>
                    <p><b class="text-primary">Time Difference:</b> The Philippines is 8 hours ahead of Coordinated Universal Time (UTC +8).</p>
                    <br>
                    <p>
                        <b class="text-primary">Weather:</b> The average temperature in Cebu City in October for a typical day ranges from a high of 84°F (29°C) to a low of 79°F (26°C). Some would describe it as very warm with a gentle breeze.
                    </p>
                    <br>
                    <p>
                        <b class="text-primary">Tourist Information:</b> Further tourist information is at https://philippines.travel/safetrip.
                    </p>
                    <br>
                    <p>
                        <b class="text-primary">Electric Plug and Socket: </b> Electric voltage is 220V, 60 cycles, AC in the Philippines. We suggest you bring a universal travel adapter plug to charge your laptop and mobile electronic devices.
                    </p>
                    <p>
                    <div class="plug-types">
                        <div class="plug-type">
                            <img src="{{ asset('img/plug-types/type-a.png') }}" alt="Type A">
                            <p>Type A</p>
                        </div>
                        <div class="plug-type">
                            <img src="{{ asset('img/plug-types/type-a.png') }}" alt="Type B">
                            <p>Type B</p>
                        </div>
                        <div class="plug-type">
                            <img src="{{ asset('img/plug-types/type-a.png') }}" alt="Type C">
                            <p>Type C</p>
                        </div>
                        <div class="plug-type">
                            <img src="{{ asset('img/plug-types/universal-adapter.jpg') }}" alt="Universal Adapter Plug">
                            <p>Universal Travel Adapter Plug</p>
                        </div>
                    </div>
                    </p>
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
