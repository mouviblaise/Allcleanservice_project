<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Devis;
use Illuminate\Http\Request;
use App\Mail\DevisNotification;
use Illuminate\Support\Facades\Mail;

class DevisController extends Controller
{
    public function formulaire()
    {
        return view('devis.formulaire'); // Laravel va chercher resources/views/devis/formulaire.blade.php
        
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email',
        'adresse' => 'required|string',
        'telephone' => 'required|string',
        'service' => 'required|string',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('photos', 'public');
        $validated['photo'] = $photoPath;
    }

    $devis = \App\Models\Devis::create($validated);

    // Envoi de l’email
    Mail::to('Allcleanservice@gmail.com')->send(new DevisNotification($devis));

    return back()->with('success', 'Votre demande a bien été envoyée !');
}
public function show($id)
{
    $devis = Devis::findOrFail($id);
    return view('admin.devis.show', compact('devis'));
}
public function index()
{
    $devis = Devis::latest()->paginate(10);
    return view('admin.devis.index', compact('devis'));
}
public function destroy($id)
{
    $devis = Devis::findOrFail($id);

    // Supprimer la photo si elle existe
    if ($devis->photo && Storage::exists($devis->photo)) {
        Storage::delete($devis->photo);
    }

    $devis->delete();

    return redirect()->route('admin.devis.index')->with('success', 'Demande de devis supprimée avec succès.');
}

// Affiche le formulaire d'édition
public function edit($id)
{
    $devis = Devis::findOrFail($id);
    return view('admin.devis.edit', compact('devis'));
}

// Traite la modification
public function update(Request $request, $id)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email',
        'adresse' => 'required',
        'telephone' => 'required',
        'service' => 'required',
    ]);

    $devis = Devis::findOrFail($id);
    $devis->update($request->all());

    return redirect()->route('admin.devis.index')->with('success', 'Demande de devis modifiée avec succès.');
}


// Formulaire pour répondre
public function repondre($id)
{
    $devis = Devis::findOrFail($id);
    return view('admin.devis.repondre', compact('devis'));
}

// Envoi du mail
public function sendMail(Request $request, $id)
{
    $request->validate([
        'objet' => 'required',
        'message' => 'required',
    ]);

    $devis = Devis::findOrFail($id);

    Mail::send('emails.reponse', [
        'nom' => $devis->nom,
        'messageContent' => $request->message,
    ], function ($mail) use ($devis, $request) {
        $mail->to($devis->email)
             ->subject($request->objet);
    });

    return redirect()->route('admin.devis.index')->with('success', 'Réponse envoyée avec succès à ' . $devis->email);
}


}