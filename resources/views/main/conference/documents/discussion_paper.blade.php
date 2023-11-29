@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="{{ url('css/main/conference/disc_paper.css') }}">
<div class="container">
    <header class="discussion-header">Discussion Paper</header>
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
        <!-- Search field HTML -->
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-button">
                <i class='bx bx-search search-icon'></i>
            </button>
        </div>
        <!-- Toggle Button 1 -->
        <button class="collapse-button" onclick="toggleList('list1')">
            <i id="icon1" class='bx bxs-caret-down-circle'></i> Agenda 1
        </button>
        <!-- List 1 -->
        <ul class="list" id="list1">
            <li class="list-item">Item 1</li>
            <li class="list-item">Item 2</li>
            <li class="list-item">Item 3</li>
            <li class="list-item">Item 4</li>
            <li class="list-item">Item 5</li>
        </ul>

        <!-- Toggle Button 2 -->
        <button class="collapse-button" onclick="toggleList('list2')">
            <i id="icon2" class='bx bxs-caret-down-circle'></i> Agenda 2
        </button>
        <!-- List 2 -->
        <ul class="list" id="list2">
            <li class="list-item">Item A</li>
            <li class="list-item">Item B</li>
            <li class="list-item">Item C</li>
            <li class="list-item">Item D</li>
            <li class="list-item">Item E</li>
        </ul>
        <!-- Toggle Button 2 -->
        <button class="collapse-button" onclick="toggleList('list3')">
            <i id="icon3" class='bx bxs-caret-down-circle'></i> Agenda 3
        </button>
        <!-- List 2 -->
        <ul class="list" id="list3">
            <li class="list-item">Item 1A</li>
            <li class="list-item">Item 2B</li>

        </ul>
    </div>
</div>

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
