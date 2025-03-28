@extends('layouts.app')
@section('body_class', 'dashboard')

@section('content')
<div class="container mt-4">
    <div class="card">
        <header class="card-header">
            <h5 class="card-title mb-0">Création d'un artiste</h5>
        </header>
        <div class="card-body">
            <form action="{{ route('artistes.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input class="form-control @error('nom') is-invalid @enderror" type="text" name="nom" id="nom" value="{{ old('nom') }}" placeholder="Nom de l'Artiste">
                    @error('nom')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <x-tinymce name="description" />

                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection