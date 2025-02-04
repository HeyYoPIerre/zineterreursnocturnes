@extends('template')

@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">Artistes</p>
            </header>
            <div class="card-content">
                <div class="content">
                    <table class="table is-hoverable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nom</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($artistes as $artiste)
                                <tr>
                                    <td>{{ $artiste->id }}</td>
                                    <td><strong>{{ $artiste->nom }}</strong></td>
                                    <td><a class="button is-primary" href="{{ route('artistes.show', $artiste->id) }}">Voir</a></td>
                                    <td><a class="button is-warning" href="{{ route('artistes.edit', $artiste->id) }}">Modifier</a></td>
                                    <td>
                                        <form action="{{ route('artistes.destroy', $artiste->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="button is-danger" id="confirmDeleteBtn">Supprimer</button>
                                        </form>
                                        <script>
                                            document.getElementById('confirmDeleteBtn').addEventListener('click', function(event) {
                                                // Afficher la confirmation avec un message
                                                if (confirm('Êtes-vous sûr de vouloir supprimer cet artiste ? Cette action est irréversible.')) {
                                                    // Si l'utilisateur confirme, soumettre le formulaire
                                                    document.getElementById('deleteForm').submit();
                                                }
                                            });
                                        </script>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <footer class="card-footer">
                {{ $artistes->links() }}
            </footer>
        </div>
@endsection