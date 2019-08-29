@extends('layout')

@section('content')

    <h1>Email Address Directory</h1>

    <ul>
        @foreach($directory as $entry)

            <li>{{ $entry->name }}</li>

        @endforeach
    </ul>

@endsection