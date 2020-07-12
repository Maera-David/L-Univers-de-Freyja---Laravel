@extends('template.app')

@section('content')
@foreach ($comments as $comment)
<div>
    <ol>
    <li>{{ $comment->name }}</li>
    <li>{{ $comment->comment }}</li>
    </ol>
</div>

@endforeach
@endsection
