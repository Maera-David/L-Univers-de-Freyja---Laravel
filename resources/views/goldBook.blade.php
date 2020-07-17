@extends('template.app')

@section('content')
<a type="button" href="{{ Route('commentForm') }}" class="btn btn-light" id="comment-btn">Ecrivez le vôtre</a>
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
