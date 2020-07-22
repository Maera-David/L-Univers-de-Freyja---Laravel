@extends('template.app')

@section('content')
<div class="crystal-border">
    <div>
        <img width="300" height="auto" class="img-crystal" src="{{ asset('assets/img/CRYSTALS/' . strtoupper($crystal->name) . '.jpg') }}" alt="{{ $crystal->name }}">
    </div>

    <div class="crystal-title">{{ $crystal->name }}</div>

    <p class="crystal-description">
        {{ $crystal->description }}
    </p>
</div>
@endsection
