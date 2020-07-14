@extends('template.app')

@section('content')
<div class="child-page-listing">

    <h1>Les pierres et leurs bienfaits</h1>

    <div class="grid-container">
        @foreach ($crystals as $crystal)

            <article  class="location-listing">
                <a class="location-title" href="{{ route('crystalDescription', ['id' => $crystal->id]) }}">{{ $crystal->name }}</a>
                <div class="location-image">
                        <img width="300" height="169" src="{{ asset('assets/img/CRYSTALS/' . strtoupper($crystal->name) . '.jpg') }}" alt="{{ $crystal->name }}">
                </div>
            </article>

        @endforeach
    </div>
</div>
@endsection
