@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Détails de la demande de devis</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nom :</strong> {{ $devis->nom }} {{ $devis->prenom }}</p>
            <p><strong>Email :</strong> {{ $devis->email }}</p>
            <p><strong>Téléphone :</strong> {{ $devis->telephone }}</p>
            <p><strong>Adresse :</strong> {{ $devis->adresse }}</p>
            <p><strong>Service demandé :</strong> {{ $devis->service }}</p>

            @if($devis->photo)
                <p><strong>Photo envoyée :</strong></p>
                <img src="{{ asset('storage/' . $devis->photo) }}" alt="Photo envoyée" class="img-fluid rounded" style="max-width: 400px;">
            @else
                <p><strong>Photo :</strong> Aucune</p>
            @endif

            <p><strong>Date de soumission :</strong> {{ $devis->created_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>

    <div class="mt-3">
        <a href="{{ route('admin.devis.index') }}" class="btn btn-secondary">← Retour à la liste</a>
        <form action="{{ route('admin.devis.destroy', $devis->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Supprimer cette demande ?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
</div>
@endsection
