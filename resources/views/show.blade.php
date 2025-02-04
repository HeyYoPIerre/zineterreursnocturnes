@extends('template')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Nom : {{ $artiste->nom }}</p>
        </header>
        <div class="container text-center">
            <div class="row">
                <div class="content col">
                    <p>{{ $artiste->description }}</p>
                </div>
                <div class="col">
                    @if (!empty($artiste->images) && $artiste->images->count() > 0)
                        @foreach($artiste->images as $image)
                            <img src="{{ asset('storage/' . $image->path) }}" alt="Image de {{ $artiste->nom }}" width="200">
                        @endforeach
                        @else
                        <p>Aucune image disponible</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection  