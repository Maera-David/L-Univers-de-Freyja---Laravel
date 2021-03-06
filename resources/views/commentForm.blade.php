@extends('template.app')

@section('content')
    <form class="contactForm" action="{{ Route('commentForm') }}" method="POST">
        @csrf
        <h1 class="contactFormTitle">Un commentaire ?</h1>
        <input name="Nom" type="text" placeholder="Nom/Prénom/Pseudo" />
        @error('Nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
        <textarea name="Contenu" id="contact" type="text" placeholder="Votre message ici !"></textarea>
        @error('Contenu')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
        <button type="submit" class="btnContact">Envoyer</button>
    </form>
@endsection
