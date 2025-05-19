<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Validation
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        // Contenu du mail
        $data = [
            'nom' => $request->nom,
            'email' => $request->email,
            'message_content' => $request->message,
        ];

        // Envoi de l'email
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('allcleanservice@gmail.com') // adresse du client
                    ->subject('Nouveau message de contact')
                    ->replyTo($data['email'], $data['nom']);
        });

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}


