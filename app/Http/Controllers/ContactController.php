<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function sendMail(Request $request) {
        $this->validate($request, [
            'Nom' => 'required',
            'Mail' => 'required|email',
            'Objet' => 'required',
            'Contenu' => 'required'
        ]);

        $message = (object)[
            'from' => $request->Mail,
            'name' => $request->Nom,
            'object' => $request->Objet,
            'content' => $request->Contenu
        ];
        $receiver = env('CONTACT_MAIL');

        Mail::to($receiver)->send(new Contact($message));
    }
}
