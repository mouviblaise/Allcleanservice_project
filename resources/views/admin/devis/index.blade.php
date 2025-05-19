@extends('layouts.admin')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Liste des demandes de devis</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Service</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($devis as $d)
            <tr>
                <td>{{ $d->nom }} {{ $d->prenom }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->telephone }}</td>
                <td>{{ $d->service }}</td>
                <td>{{ $d->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('admin.devis.show', $d->id) }}" class="btn btn-sm btn-success">Voir</a>
                    <form action="{{ route('admin.devis.destroy', $d->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Confirmer la suppression ?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $devis->links() }}
</div>
@endsection
