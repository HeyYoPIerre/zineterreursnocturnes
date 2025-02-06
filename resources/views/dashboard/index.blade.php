@extends('layouts.app')

@section('content')
    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card">
                <header class="card-header d-flex align-items-center">
                    <p class="card-header-title">Artistes</p>
                    <a class="button is-info" href="{{ route('artistes.create') }}">Créer un artiste</a>
                    <a class="button is-success" href="{{ route('images.create') }}">Ajouter une image</a>
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
                                            <form action="{{ route('artistes.destroy', $artiste->id) }}" method="post" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="confirm" value="yes"> <!-- Ajout de ce champ caché -->
                                                <button type="button" class="button is-danger delete-btn">Supprimer</button>
                                            </form>
                                        </td>
                                        
                                        <script>
                                            document.addEventListener("DOMContentLoaded", function() {
                                                document.querySelectorAll(".delete-btn").forEach(button => {
                                                    button.addEventListener("click", function(event) {
                                                        event.preventDefault(); // Empêche toute action par défaut
                                                        event.stopImmediatePropagation(); // Empêche l'exécution multiple
                                        
                                                        let confirmation = confirm('Êtes-vous sûr de vouloir supprimer cet artiste ? Cette action est irréversible.');
                                                        
                                                        if (confirmation) {
                                                            this.closest(".delete-form").submit();
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
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
    </div>
@endsection