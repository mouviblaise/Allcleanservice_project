@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Modifier une demande de devis</h2>

    <form action="{{ route('admin.devis.update', $devis->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $devis->nom }}" required>
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ $devis->prenom }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $devis->email }}" required>
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" name="adresse" class="form-control" value="{{ $devis->adresse }}" required>
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="text" name="telephone" class="form-control" value="{{ $devis->telephone }}" required>
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">Service souhaité</label>
            <select name="service" class="form-select" required>
                <option {{ $devis->service == 'Nettoyage de vitres' ? 'selected' : '' }}>Nettoyage de vitres</option>
                <option {{ $devis->service == 'Nettoyage de tout sol' ? 'selected' : '' }}>Nettoyage de tout sol</option>
                <option {{ $devis->service == 'Nettoyage intérieur de véhicule' ? 'selected' : '' }}>Nettoyage intérieur de véhicule</option>
                <option {{ $devis->service == 'Nettoyage de bureaux, locaux, société' ? 'selected' : '' }}>Nettoyage de bureaux, locaux, société</option>
                <option {{ $devis->service == 'Entretien espaces verts' ? 'selected' : '' }}>Entretien espaces verts</option>
                <option {{ $devis->service == 'Nettoyage après chantier' ? 'selected' : '' }}>Nettoyage après chantier</option>
                <option {{ $devis->service == 'Entretien maison' ? 'selected' : '' }}>Entretien maison</option>
                <option {{ $devis->service == 'Entretien copropriété' ? 'selected' : '' }}>Entretien copropriété</option>
                <option {{ $devis->service == 'Autres' ? 'selected' : '' }}>Autres</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        <a href="{{ route('admin.devis.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
