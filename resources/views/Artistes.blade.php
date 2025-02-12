@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Liste des Artistes</h1>

    @foreach($artistes as $artiste)
    <div class="row align-items-center mb-4 border-bottom pb-3">
        <!-- Texte à gauche -->
        <div class="col-md-6">
            <h3>{{ $artiste->nom }}</h3>
            <p>{{ $artiste->description }}</p>
        </div>

        <!-- Images à droite avec un carousel -->
        <div class="col-md-6">
            @if($artiste->images->count() > 0)
            <div id="carousel{{ $artiste->id }}" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach($artiste->images as $key => $image)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <img src="{{ 'data:image/jpeg;base64,' . $image->base64 }}" alt="Image de {{ $artiste->nom }}" class="img-fluid" style="max-width: 200px;">
                        </div>
                    @endforeach
                </div>
                <!-- Boutons de navigation -->
                @if($artiste->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel{{ $artiste->id }}" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel{{ $artiste->id }}" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                @endif
            </div>
            @else
                <p>Aucune image disponible</p>
            @endif
        </div>
    </div>
    @endforeach
</div>
@endsection