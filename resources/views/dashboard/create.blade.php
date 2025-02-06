@extends('layouts.app')

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
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description de l'artiste">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection