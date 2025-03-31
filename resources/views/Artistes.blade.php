@extends('layouts.app')

@section('body_class', 'page-artistes')

@section('content')

    <div class="container special-text mt-5 mb-5">
        <div class="row">
            <div class="col">
                <h2 class="text-center text-uppercase fw-bold mb-4">Terreurs Nocturnes – Collectif d’Artistes</h2>
                Terreurs Nocturnes est un collectif d’artistes rassemblant des créateurs aux styles graphiques uniques et
                aux univers variés. Cette diversité permet d’explorer un large éventail de récits, chacun apportant une
                vision originale et singulière. <br>
                 N’hésitez pas à parcourir les vignettes de chaque artiste ayant contribué au
                fanzine afin de découvrir davantage sur leur travail et leur univers créatif !
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @foreach ($artistes as $artiste)
            <div class="row bandeau align-items-center border-bottom pt-3 pb-3 d-flex flex-wrap">
                @section("artist_content{$loop->iteration}")
                    <div
                        class="col-12 col-md-6 pt-4 d-flex flex-column justify-content-center align-items-center text-center overflow-hidden">
                        <h3 class="pb-3 text-uppercase fw-bold">{{ $artiste->nom }}</h3>
                        <p>{!! $artiste->description !!}</p>
                    </div>
                @endsection
                @section("carousel_image{$loop->iteration}")
                    <div
                        class="col-12 col-md-6 pt-4 d-flex flex-column justify-content-center align-items-center text-center overflow-hidden">
                        @if ($artiste->images->count() > 0)
                            <div id="carousel{{ $artiste->id }}" class="carousel slide" data-bs-ride="carousel"
                                data-bs-interval="3000">
                                <div class="carousel-inner">
                                    @foreach ($artiste->images as $key => $image)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ 'data:image/jpeg;base64,' . $image->base64 }}"
                                                alt="Image de {{ $artiste->nom }}" class="img-fluid object-fit-contain"
                                                style="height: 60vh">
                                        </div>
                                    @endforeach
                                </div>

                                @if ($artiste->images->count() > 1)
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carousel{{ $artiste->id }}" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carousel{{ $artiste->id }}" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                                @endif
                            </div>
                        @else
                            <p>Aucune image disponible</p>
                        @endif
                    </div>
                @endsection

                @if ($loop->iteration % 2 == 0)
                    <!-- Texte à gauche, image à droite -->
                    @yield("artist_content{$loop->iteration}")
                    @yield("carousel_image{$loop->iteration}")
                @else
                    <!-- Image à gauche, texte à droite -->
                    @yield("carousel_image{$loop->iteration}")
                    @yield("artist_content{$loop->iteration}")
                @endif
            </div>
        @endforeach
    </div>
@endsection
