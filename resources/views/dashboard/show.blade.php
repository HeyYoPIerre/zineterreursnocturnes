@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Nom : {{ $artiste->nom }}</p>
        </header>
        <div class="container text-center">
            <div class="row">
                <div class="content col d-flex justify-content-center align-items-center">
                    <p>{{ $artiste->description }}</p>
                </div>
                <div class="col d-flex flex-wrap">
                    @if (!empty($artiste->images) && $artiste->images->count() > 0)
                        @foreach($artiste->images as $image)
                            <div class="image-container position-relative">
                                <!-- Croix de suppression -->
                                <form action="{{ route('images.destroy', $image->id) }}" method="post" class="delete-image-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="delete-image-btn">&times;</button>
                                </form>
                                <!-- Image -->
                                <img src="{{ 'data:image/jpeg;base64,' . $image->base64 }}" alt="Image de {{ $artiste->nom }}" width="200">
                            </div>
                        @endforeach
                    @else
                        <p>Aucune image disponible</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection