@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un artiste</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('artistes.update', $artiste->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                          <input class="input @error('nom') is-danger @enderror" type="text" name="nom" value="{{ old('nom', $artiste->nom) }}" placeholder="Nom de l'Artiste">
                        </div>
                        @error('nom')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">Description</label>
                        <div class="control">
                            <textarea class="textarea" name="description" placeholder="Description de l'Artiste">{{ old('description', $artiste->description) }}</textarea>
                        </div>
                        @error('description')
                            <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <div class="control">
                          <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection