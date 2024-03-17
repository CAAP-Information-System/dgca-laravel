@extends('layouts.app')
<title>@yield('title', 'Discussion Paper-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/disc_paper.css') }}">
@include('main.banner', ['bannerTitle' => 'Discussion Papers'])
<div class="container">
    <main class="container-main">
        <div class="dl-temp-grp">
            <div class="dl-grp">
                <img src="{{ asset('img/word-template.svg') }}" alt="CAAP Logo" class="temp-svg">
                <a href="{{ asset('document/dp_template_58dgca.doc') }}" class="dl-text" download="">Download Discussion Paper Template</a>
            </div>
            <div class="dl-grp">
                <img src="{{ asset('img/zip-file.svg') }}" alt="CAAP Logo" class="temp-svg">
                <a href="{{ asset('document/all_discussion_papers.zip') }}" class="dl-text" download="">Download All Templates (ZIP)</a>
            </div>
        </div>
        <div class="list-container">

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search...">
                <button class="search-button">
                    <i class='bx bx-search search-icon'></i>
                </button>
            </div>
            <!-- Toggle Button 1 -->
            <button class="collapse-button" onclick="toggleList('list1')">
                <i id="icon1" class='bx bxs-caret-down-circle'></i> Agenda 1: Theme Topic
            </button>


            <ul class="list" id="list1">

                @foreach($agenda1 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">
                    <a href="#">
                        59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}
                    </a>
                </li>
                @endif
                @endforeach

            </ul>


            <button class="collapse-button" onclick="toggleList('list2')">
                <i id="icon2" class='bx bxs-caret-down-circle'></i> Agenda 2: Review of Action Items arising from the previous Conference
            </button>

            <ul class="list" id="list2">
                @foreach($agenda2 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/2/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <button class="collapse-button" onclick="toggleList('list3')">
                <i id="icon3" class='bx bxs-caret-down-circle'></i> Agenda 3: Aviation Safety
            </button>

            <ul class="list" id="list3">
                @foreach($agenda3 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/3/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach

            </ul>
            <!-- Toggle Button 4 -->
            <button class="collapse-button" onclick="toggleList('list4')">
                <i id="icon4" class='bx bxs-caret-down-circle'></i> Agenda 4: Air Navigation
            </button>
            <!-- List 4 -->
            <ul class="list" id="list4">
                @foreach($agenda4 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/4/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 5 -->
            <button class="collapse-button" onclick="toggleList('list5')">
                <i id="icon5" class='bx bxs-caret-down-circle'></i> Agenda 5: Aviation Security and Facilitation
            </button>
            <!-- List 5 -->
            <ul class="list" id="list5">
                @foreach($agenda5 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 6 -->
            <button class="collapse-button" onclick="toggleList('list6')">
                <i id="icon6" class='bx bxs-caret-down-circle'></i> Agenda 6: Economic Development of Air Transport
            </button>
            <!-- List 6 -->
            <ul class="list" id="list6">
                @foreach($agenda6 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>
            <button class="collapse-button" onclick="toggleList('list7')">
                <i id="icon7" class='bx bxs-caret-down-circle'></i> Agenda 7: Aviation and Environment
            </button>
            <!-- List 7 -->
            <ul class="list" id="list7">
                @foreach($agenda7 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 8 -->
            <button class="collapse-button" onclick="toggleList('list8')">
                <i id="icon8" class='bx bxs-caret-down-circle'></i> Agenda 8: Capacity Development and Implementation
            </button>
            <!-- List 8 -->
            <ul class="list" id="list8">
                @foreach($agenda8 as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 9 -->
            <button class="collapse-button" onclick="toggleList('list9')">
                <i id="icon9" class='bx bxs-caret-down-circle'></i> Agenda Item 9a: Ratification of International Air Law Treaties
            </button>
            <!-- List 9 -->
            <ul class="list" id="list9">
                @foreach($agenda9a as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>
            <button class="collapse-button" onclick="toggleList('list10')">
                <i id="icon10" class='bx bxs-caret-down-circle'></i> Agenda Item 9b: Updates
            </button>
            <!-- List 9 -->
            <ul class="list" id="list10">
                @foreach($agenda9b as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>
            <!-- Toggle Button 10 -->
            <button class="collapse-button" onclick="toggleList('list11')">
                <i id="icon11" class='bx bxs-caret-down-circle'></i> Agenda Item 10 a: Any Other Matters
            </button>
            <!-- List 10 -->
            <ul class="list" id="list11">
                @foreach($agenda10a as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 11 -->
            <button class="collapse-button" onclick="toggleList('list12')">
                <i id="icon12" class='bx bxs-caret-down-circle'></i> Agenda Item 10 b: Hosting Offer and Theme Topic for the forthcoming Conference(s) of APAC DGCA
            </button>
            <!-- List 11 -->
            <ul class="list" id="list12">
                @foreach($agenda10b as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 12 -->
            <button class="collapse-button" onclick="toggleList('list13')">
                <i id="icon13" class='bx bxs-caret-down-circle'></i> Agenda Item 10 c: Endorsement of Action Items arising from the present Conference
            </button>
            <!-- List 12 -->
            <ul class="list" id="list13">
                @foreach($agenda10c as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>

            <!-- Toggle Button 13 -->
            <button class="collapse-button" onclick="toggleList('list14')">
                <i id="icon14" class='bx bxs-caret-down-circle'></i> Presentation/Video
            </button>
            <!-- List 13 -->
            <ul class="list" id="list14">
                @foreach($presentation as $discussion)
                @if($discussion->doc_status == 'Approved')
                <li class="list-item">59/DP/1/{{$discussion->id}} {{ $discussion->name }} {{ $discussion->upload_date }}</li>
                @endif
                @endforeach
            </ul>
        </div>
    </main>

</div>

<script>
    function toggleList(listId) {
        const list = document.getElementById(listId);
        const icon = document.getElementById('icon' + listId.charAt(listId.length - 1));
        list.classList.toggle('expanded');
        icon.classList.toggle('rotated');
    }
</script>
@endsection
