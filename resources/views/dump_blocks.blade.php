@foreach($discussions as $agenda => $agendaItems)
    <button class="collapse-button" onclick="toggleList('list{{ $loop->index + 1 }}')">
        <i id="icon{{ $loop->index + 1 }}" class='bx bxs-caret-down-circle'></i> {{ $agenda }}: Theme Topic
    </button>
    <!-- List {{ $loop->index + 1 }} -->
    <ul class="list" id="list{{ $loop->index + 1 }}">
        @foreach($agendaItems as $item)
            <li class="list-item">{{ $item->name }}</li>
        @endforeach
    </ul>
@endforeach
