@extends('layouts.app')
<title>@yield('title', 'Information Paper-59th DGCA')</title>
@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/banner.css') }}">
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/info_paper.css') }}">
@include('main.banner', ['bannerTitle' => 'information Papers'])
<div class="container">
    <main class="container-main">
        <div class="dl-temp-grp">
            <div class="dl-grp">
                <img src="{{ asset('img/word-template.svg') }}" alt="CAAP Logo" class="temp-svg">
                <a href="{{ asset('document/dp_template_58dgca.doc') }}" class="dl-text" download="">Download Information Paper Template</a>
            </div>
            <div class="dl-grp">
                <img src="{{ asset('img/zip-file.svg') }}" alt="CAAP Logo" class="temp-svg">
                <a href="{{ asset('document/all_information_papers.zip') }}" class="dl-text" download="">Download All Templates (ZIP)</a>
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

                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda1 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/1/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>

            </ul>


            <button class="collapse-button" onclick="toggleList('list2')">
                <i id="icon2" class='bx bxs-caret-down-circle'></i> Agenda 2: Review of Action Items arising from the previous Conference
            </button>

            <ul class="list" id="list2">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda2 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/2/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>

            </ul>

            <button class="collapse-button" onclick="toggleList('list3')">
                <i id="icon3" class='bx bxs-caret-down-circle'></i> Agenda 3: Aviation Safety
            </button>

            <ul class="list" id="list3">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda3 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/3/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>

            </ul>
            <!-- Toggle Button 4 -->
            <button class="collapse-button" onclick="toggleList('list4')">
                <i id="icon4" class='bx bxs-caret-down-circle'></i> Agenda 4: Air Navigation
            </button>
            <!-- List 4 -->
            <ul class="list" id="list4">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda4 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/4/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 5 -->
            <button class="collapse-button" onclick="toggleList('list5')">
                <i id="icon5" class='bx bxs-caret-down-circle'></i> Agenda 5: Aviation Security and Facilitation
            </button>
            <!-- List 5 -->
            <ul class="list" id="list5">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda5 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/5/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 6 -->
            <button class="collapse-button" onclick="toggleList('list6')">
                <i id="icon6" class='bx bxs-caret-down-circle'></i> Agenda 6: Economic Development of Air Transport
            </button>
            <!-- List 6 -->
            <ul class="list" id="list6">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda6 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/6/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>
            <button class="collapse-button" onclick="toggleList('list7')">
                <i id="icon7" class='bx bxs-caret-down-circle'></i> Agenda 7: Aviation and Environment
            </button>
            <!-- List 7 -->
            <ul class="list" id="list7">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda7 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/7/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 8 -->
            <button class="collapse-button" onclick="toggleList('list8')">
                <i id="icon8" class='bx bxs-caret-down-circle'></i> Agenda 8: Capacity Development and Implementation
            </button>
            <!-- List 8 -->
            <ul class="list" id="list8">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda8 as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/8/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 9 -->
            <button class="collapse-button" onclick="toggleList('list9')">
                <i id="icon9" class='bx bxs-caret-down-circle'></i> Agenda Item 9a: Ratification of International Air Law Treaties
            </button>
            <!-- List 9 -->
            <ul class="list" id="list9">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda9a as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/9A/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>
            <button class="collapse-button" onclick="toggleList('list10')">
                <i id="icon10" class='bx bxs-caret-down-circle'></i> Agenda Item 9b: Updates
            </button>
            <!-- List 9 -->
            <ul class="list" id="list10">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda9b as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/9B/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>
            <!-- Toggle Button 10 -->
            <button class="collapse-button" onclick="toggleList('list11')">
                <i id="icon11" class='bx bxs-caret-down-circle'></i> Agenda Item 10 a: Any Other Matters
            </button>
            <!-- List 10 -->
            <ul class="list" id="list11">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda10a as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/10A/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 11 -->
            <button class="collapse-button" onclick="toggleList('list12')">
                <i id="icon12" class='bx bxs-caret-down-circle'></i> Agenda Item 10 b: Hosting Offer and Theme Topic for the forthcoming Conference(s) of APAC DGCA
            </button>
            <!-- List 11 -->
            <ul class="list" id="list12">
                <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda10b as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/10B/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 12 -->
            <button class="collapse-button" onclick="toggleList('list13')">
                <i id="icon13" class='bx bxs-caret-down-circle'></i> Agenda Item 10 c: Endorsement of Action Items arising from the present Conference
            </button>
            <!-- List 12 -->
            <ul class="list" id="list13">
            <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($agenda10c as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/10C/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
            </ul>

            <!-- Toggle Button 13 -->
            <button class="collapse-button" onclick="toggleList('list14')">
                <i id="icon14" class='bx bxs-caret-down-circle'></i> Presentation/Video
            </button>
            <!-- List 13 -->
            <ul class="list" id="list14">
            <table class="table">
                    <thead>
                        <th style="width: 10%;">Paper No.</th>
                        <th>Title</th>
                        <th>Presenter</th>
                        <th>Date Uploaded</th>
                    </thead>
                    @foreach($presentation as $information)
                    @if($information->doc_status == 'Approved')
                    <tbody>
                        <td><b>59/DP/PV/{{$information->id}}</b></td>
                        <td><a href="{{ asset('storage/conference/' . $information->name) }}">{{ $information->name }}</a></td>
                        <td>{{ $information->owner }}</td>
                        <td>{{ $information->upload_date }}</td>
                    </tbody>
                    @endif
                    @endforeach
                </table>
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
