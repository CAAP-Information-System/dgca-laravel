@extends('layouts.app')
<title>@yield('title', 'Medical Support-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/delegate/med_support.css') }}">

@include('main.banner', ['bannerTitle' => 'Medical Support'])
<div class="container">

    <section class="medical-support">
        <header class="medical-hdr">
            <img src="{{ asset('img/icon/medical.png') }}" alt="medical" class="medical-img">
            DGCA Medical Support
        </header>
        <div class="medical-content">
            During the conference period, our DGCA Medical Team will be available at the Conference Venue, situated on the <b class="text-primary">ground floor of Shangri-La Mactan</b>, from <b class="text-primary">9:00 am to 5:00 pm</b>. They will offer first aid, urgent medical assistance, and medical guidance to conference attendees who may require assistance due to health issues. Feel free to approach them for any medical concerns or emergencies that may arise during the event.
        </div>
        <br>
        <header class="medical-hdr">
            <img src="{{ asset('img/icon/med-team.png') }}" alt="medical" class="medical-img">
            Medical Team and Contacts
        </header>
        <div class="medical-content">
            The DGCA Medical Team may also be contacted directly, please follow the provided contacts below:
            <ul>
                <li>Mobile Number: <a href="#">(+63) 912-345-6789</a></li>
                <li>Email Address: <a href="#">med-team-email@email.com</a></li>
            </ul>


        </div>
    </section>

</div>

@endsection
