@extends('template.app')

@section('content')
    <form class="contactForm" action="{{ Route('contactSend') }}" method="POST">
        @csrf
        <h1 class="contactFormTitle">Contactez-moi !</h1>
        <input name="Nom" type="text" placeholder="Nom/Prénom/Pseudo" />
        @error('Nom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
        <input name="Mail" type="email" placeholder="E-mail" />
        @error('Mail')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br />
        <input name="Objet" type="text" placeholder="Objet" />
        @error('Objet')
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
