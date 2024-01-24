@extends('layouts.app')

@section('content')
    <ul>
        @foreach($trains as $train)
            <li>
                <p>{{ $train->agency }}</p>
            </li>
            <li>
                <p>{{ $train->departure_station }}</p>
            </li>
            <li>
                <p>{{ $train->arrival_station }}</p>
            </li>
            <li>
                <p>{{ $train->departure_time }}</p>
            </li>
            <li>
                <p>{{ $train->arrival_time }}</p>
            </li>
            <li>
                <p>{{ $train->train_code }}</p>
            </li>
            <li>
                <p>{{ $train->in_time }}</p>
            </li>
            <li>
                <p>{{ $train->delated }}</p>
            </li>
        @endforeach
    </ul>
@endsection