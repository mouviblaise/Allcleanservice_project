<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Photo;
use App\Models\Devis;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    // Page d'accueil
    public function index() {
        return view('home');
    }
    public function home() {
        return view('home');
    }

    // Page des services
    public function services() {
        $services = Service::all();
        return view('services', compact('services'));
    }


    // Page contact / formulaire de devis
    public function contact() {
        return view('contact');
    }

    // Envoi du devis
    public function sendDevis(Request $request) {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
            'service' => 'required',
            'photo' => 'required',
            'message' => 'required',
        ]);

        Devis::create($request->all());
        return redirect()->back()->with('success', 'Votre demande a été envoyée avec succès !');
    }
    
}
