@component('mail::message')
# Nouvelle demande de devis

**Nom :** {{ $devis->nom }}  
**Prénom :** {{ $devis->prenom }}  
**Email :** {{ $devis->email }}  
**Téléphone :** {{ $devis->telephone }}  
**Adresse :** {{ $devis->adresse }}  
**Service demandé :** {{ $devis->service }}

@if($devis->photo)
**Photo envoyée :**  
![photo]( {{ asset('storage/' . $devis->photo) }} )
@endif

@component('mail::button', ['url' => 'mailto:' . $devis->email])
Répondre au client
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
