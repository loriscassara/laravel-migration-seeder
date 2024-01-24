@extends('layouts.app')

@section('content')
    <ul>
        @foreach($trains as $train)
            <li>
                <p><span class="fw-bold">Azienda</span> {{ $train->agency }}</p>
            </li>
            <li>
                <p><span class="fw-bold">Stazione di partenza:</span> {{ $train->departure_station }}</p>
            </li>
            <li>
                <p><span class="fw-bold">Stazione di arrivo:</span> {{ $train->arrival_station }}</p>
            </li>
            <li>
                <p><span class="fw-bold">Orario di partenza:</span> {{ $train->departure_time }}</p>
            </li>
            <li>
                <p><span class="fw-bold">Orario di arrivo:</span> {{ $train->arrival_time }}</p>
            </li>
            <li>
                <p><span class="fw-bold">Codice treno:</span> {{ $train->train_code }}</p>
            </li>
            <li>
                <p><span class="fw-bold">In orario:</span> {{ $train->in_time ? 'Si' : 'No' }}</p>
            </li>
            <li>
                <p><span class="fw-bold">Cancellato:</span> {{ $train->delated === 0 ? 'No' : 'Si' }}</p>
            </li>
        @endforeach
    </ul>
@endsection