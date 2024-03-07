@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/contact-us.css') }}">
@include('main.banner', ['bannerTitle' => 'Contact Us'])

<div class="container">
    <main class="contact-us">
        <header class="contact-header">Contact Information</header>
        <p class="contact-message">
            Require some assistance? Don't hesitate to drop us an email for help with any ongoing issues or if you have questions/inquiries about the DGCA Conference. Our administrators are dedicated to providing you with the utmost details possible!
        </p>
        <div class="dgca-emails">
            <header class="dgca-emails-header">Official DGCA Email Addresses:</header>
            <div class="grp">
                <div class="email-grp">
                    <div class="email-content">
                        <label class="email-label">
                            <i class="fa-solid fa-pen-nib"></i>
                            Conference Secretariat
                        </label>
                        <p class="email-add">
                            <a href="mailto:dgca59_secretariat@caap.gov.ph" target="_blank">
                                dgca59_secretariat@caap.gov.ph
                            </a>
                        </p>
                    </div>
                    <div class="email-content">
                        <label class="email-label">
                            <i class="fa-solid fa-newspaper"></i>
                            Registration Sub-Committee
                        </label>
                        <p class="email-add">
                            <a href="mailto:dgca59_registration@caap.gov.ph" target="_blank">
                                dgca59_registration@caap.gov.ph
                            </a>
                        </p>
                    </div>
                    <div class="email-content">
                        <label class="email-label">
                            <i class="fa-solid fa-hashtag"></i>
                            Social Affairs Sub-Committee
                        </label>
                        <p class="email-add">
                            <a href="mailto:dgca59_socialaffair@caap.gov.ph" target="_blank">
                                dgca59_socialaffairs@caap.gov.ph
                            </a>
                        </p>
                    </div>
                </div>
                <div class="svg">
                    <img src="{{ asset('img/contact-us.svg') }}" alt="contact us" class="contact-svg">
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
