@extends('layouts.app')
<title>@yield('title', 'Useful Tips and Advices-59th DGCA')</title>
@section('content')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/useful-tips.css') }}">
@include('main.banner', ['bannerTitle' => 'Useful Tips and Advices'])

<div class="container">

    <section class="useful-info-sect">
        <div class="useful-info-grp">
            <header class="useful-info-header">Passport</header>
            <div class="useful-info-desc">
                All foreign nationals entering the Philippines must possess valid passports for six months
                with a visa for travel.
            </div>
        </div>
        <div class="useful-info-grp">
            <header class="useful-info-header">VISA</header>
            <div class="useful-info-desc">
                <p>
                    The visa requirements for entering the Republic of the Philippines vary depending on your
                    nationality. Philippine visa policies can change, it's essential to verify the latest requirements
                    with the Philippine embassy, consulate, or the official Philippine government website before
                    planning your trip. Please find the general guideline for some nationalities based on the
                    information available via this website: <a href="https://dfa.gov.ph/list-of-countries-for-21-day-visa" target="_blank">https://dfa.gov.ph/list-of-countries-for-21-day-visa</a>
                </p>
                <p>
                    Visa Required for Most Other Nationalities - Citizens of many other countries, not falling
                    into the visa-free or eVisa categories, are required to obtain a visa in advance before traveling to
                    the Philippines. This usually involves applying for a tourist visa or a specific type of visa.
                </p>
                <p>
                    Visas when needed should be obtained from the original country.
                </p>
                <p>
                    Focal Points identified at the end of the letter may assist in arranging invitation letters for
                    visa purposes if needed. If required please e-mail them with the following information:
                </p>
                <ul>
                    <li>Scanned clear copy of valid passport</li>
                    <li>Name</li>
                    <li>Employer/Organisation</li>
                    <li>Job Title</li>
                    <li>Nationality</li>
                    <li>Purpose of Visit</li>
                    <li>City of Departure (in order to submit the letter of support to the appropriate Philippine
                        Embassy/Consulate)</li>
                </ul>
            </div>
        </div>
        <div class="useful-info-grp">
            <header class="useful-info-header">Customs</header>
            <div class="useful-info-desc">
                <p>Drugs and medication</p>
                <p>The Philippine Government has a zero-tolerance drugs policy. Possession of even tiny
                    amounts of illegal drugs has resulted in imprisonment for travelers entering or transiting the
                    Philippines.</p>
                <p>A doctor's prescription should be carried along with any medication that is brought into the
                    country. Some drugs and medications that may be purchased over-the-counter in other
                    countries are classified as controlled substances in the Philippines and are illegal to possess. A
                    person may be arrested and prosecuted if in possession of prescribed or over-the-counter
                    medicines containing, for example, codeine or similar ingredients.</p>
                <p>Please contact your nearest Philippine Embassy or Consulate for advice if you need to
                    bring medications or other drugs into the country.</p>
                <p>Controlled substances such as cannabis, opium etc. are banned and the penalties for
                    handling these drugs are severe.</p>
            </div>
        </div>
    </section>


</div>

@endsection
