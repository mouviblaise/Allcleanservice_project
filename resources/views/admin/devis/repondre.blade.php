@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Répondre à la demande de {{ $devis->nom }}</h2>

    <form action="{{ route('admin.devis.sendMail', $devis->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="objet" class="form-label">Objet du mail</label>
            <input type="text" name="objet" class="form-control" placeholder="Ex: Votre demande de devis" required>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="6" placeholder="Votre message..." required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Envoyer</button>
        <a href="{{ route('admin.devis.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
