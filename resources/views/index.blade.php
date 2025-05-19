@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des devis reçus</h1>

    @if($devis->isEmpty())
        <p>Aucun devis reçu pour le moment.</p>
    @else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Service</th>
                <th>Date</th>
                <th>Actions</th> {{-- colonne ajoutée --}}
            </tr>
        </thead>
        <tbody>
            @foreach($devis as $d)
            <tr>
                <td>{{ $d->nom }}</td>
                <td>{{ $d->prenom }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->telephone }}</td>
                <td>{{ $d->service }}</td>
                <td>{{ $d->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <form action="{{ route('devis.destroy', $d->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce devis ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection
