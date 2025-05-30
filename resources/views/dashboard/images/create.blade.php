@extends('layouts.app')
@section('body_class', 'dashboard')

@section('content')
<div class="container mt-4">
    <h2>Ajouter une image</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Ajouter une image
        </div>
        <div class="card-body">
            <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="image" class="form-label">Choisir une image :</label>
                    <input type="file" class="form-control" name="image" id="image" required>
                    @error('image')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artiste_id" class="form-label">Choisir un artiste :</label>
                    <select class="form-select" name="artiste_id" id="artiste_id" required>
                        <option value="">-- Sélectionner un artiste --</option>
                        @foreach($artistes as $artiste)
                            <option value="{{ $artiste->id }}">{{ $artiste->nom }}</option>
                        @endforeach
                    </select>
                    @error('artiste_id')
                        <div class="text-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection