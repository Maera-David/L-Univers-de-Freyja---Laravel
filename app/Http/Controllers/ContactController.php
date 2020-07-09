<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendMail(Request $request) {
        $this->validate($request, [
            'Nom' => 'required',
            'Mail' => 'required|email',
            'Objet' => 'required',
            'Contenu' => 'required'
        ]);

        $this->build($request->all());
    }

    public function build($data) {
        mail('mailSarah', $data['Objet'], $data['Contenu'], ['From' => $data['Mail']]);
    }
}
