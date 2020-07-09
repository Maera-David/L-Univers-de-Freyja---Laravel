@extends('template.app')

@section('content')
<form class="contactForm" action="{{ Route('contactSend') }}" method="POST">
    @csrf
    <h1 class="contactFormTitle">Contactez-moi !</h1>
    <input name="Nom" type="text" placeholder="Nom/Prénom/Pseudo" />
    <br />
    <input name="Mail" type="email" placeholder="E-mail" />
    <br />
    <input name="Objet" type="text" placeholder="Objet" />
    <br />
    <textarea name="Contenu" id="contact" type="text" placeholder="Votre message ici !"></textarea>
    <br />
    <button type="submit" class="btnContact">Envoyer</button>
</form>
@endsection
