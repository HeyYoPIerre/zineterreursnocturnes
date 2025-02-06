@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <header class="card-header">
            <h5 class="card-title mb-0">Nom : {{ $artiste->nom }}</h5>
        </header>
        <div class="container text-center">
            <div class="row">
                <div class="col d-flex justify-content-center align-items-center">
                    <p>{{ $artiste->description }}</p>
                </div>
                <div class="col d-flex flex-wrap justify-content-center">
                    @if (!empty($artiste->images) && $artiste->images->count() > 0)
                        @foreach($artiste->images as $image)
                            <div class="image-container position-relative m-2">
                                <!-- Croix de suppression -->
                                <form action="{{ route('images.destroy', $image->id) }}" method="post" class="delete-image-form position-absolute top-0 start-100 translate-middle">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">&times;</button>
                                </form>
                                <!-- Image -->
                                <img src="{{ 'data:image/jpeg;base64,' . $image->base64 }}" alt="Image de {{ $artiste->nom }}" class="img-fluid" style="max-width: 200px;">
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