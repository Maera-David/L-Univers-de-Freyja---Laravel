@extends('template.app')

@section('content')
@foreach ($comments as $comment)
<ul class="comments">
    <li class="comment">
        <div class="comment-text">
            <div class="author">{{ $comment->name }}</div>
            <p>
                {{ $comment->comment }}
            </p>
        </div>
    </li>
</ul>
@endforeach
@endsection
