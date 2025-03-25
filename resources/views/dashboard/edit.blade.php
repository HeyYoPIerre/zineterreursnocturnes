@extends('layouts.app')
@section('body_class', 'dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <header class="card-header">
            <h5 class="card-title mb-0">Modification d'un artiste</h5>
        </header>
        <div class="card-body">
            <form action="{{ route('artistes.update', $artiste->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="nom" value="{{ old('nom', $artiste->nom) }}" placeholder="Nom de l'Artiste">
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <x-tinymce name="description">{{ $artiste->description }}</x-tinymce>

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection