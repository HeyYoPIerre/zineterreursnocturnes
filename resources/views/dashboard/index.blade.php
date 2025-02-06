@extends('layouts.app')

@section('content')
    @if(session()->has('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <header class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Artistes</h5>
                    <div>
                        <a class="btn btn-info" href="{{ route('artistes.create') }}">Créer un artiste</a>
                        <a class="btn btn-success" href="{{ route('images.create') }}">Ajouter une image</a>
                    </div>
                </header>
                <div class="mt-3">
                    <table class="table table-hover">
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
                                    <td><a class="btn btn-primary" href="{{ route('artistes.show', $artiste->id) }}">Voir</a></td>
                                    <td><a class="btn btn-warning" href="{{ route('artistes.edit', $artiste->id) }}">Modifier</a></td>
                                    <td>
                                        <form action="{{ route('artistes.destroy', $artiste->id) }}" method="post" class="delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="confirm" value="yes">
                                            <button type="button" class="btn btn-danger delete-btn">Supprimer</button>
                                        </form>
                                    </td>
                                    
                                    <script>
                                        document.addEventListener("DOMContentLoaded", function() {
                                            document.querySelectorAll(".delete-btn").forEach(button => {
                                                button.addEventListener("click", function(event) {
                                                    event.preventDefault();
                                                    event.stopImmediatePropagation();
                                                
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
                <footer class="card-footer">
                    {{ $artistes->links() }}
                </footer>
            </div>
        </div>
    </div>
@endsection