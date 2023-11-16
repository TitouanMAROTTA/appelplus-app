<p>This is a super test of Events list.</p>

<p>This is the full list of events :</p>
<p>{{ $events }}.</p>


<p>This normaly should be a list with only the title of all the events.</p>
@foreach ($events as $event)
    <p>This is an event {{ $event->id }} : {{ $event->title }}</p>
@endforeach


<ul>
    @foreach ($events as $event)
        <!-- @if ($event->end_date > Carbon\Carbon::now()) -->

        {{-- The event is not passed --}}
        @if ($event->end_date > date("Y-m-d H:i:s"))
            <li>
                {{-- The event is NOT started --}}
                @if ($event->start_date > date("Y-m-d H:i:s"))
                    A VENIR : 
                {{-- The event IS started --}}
                @elseif ($event->end_date < date("Y-m-d H:i:s"))
                    EN COURS :
                @endif
                {{ ' '$event->name }}
            </li>
        @endif
    @endforeach
</ul>
