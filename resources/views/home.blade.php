@extends('layouts.app')

@section('body_class')
    home-page
@endsection

@section('content')
    <div class="parallaxe-container">
        <div class="fond-parallaxe">
        </div>
        <div class="titre-parallaxe">
        </div>
        <div class="parallaxe-asset1">
        </div>
        <div class="parallaxe-asset2">
        </div>
        <div class="parallaxe-asset3">
        </div>
        <div class="parallaxe-asset4">
        </div>
    </div>


    <div class="container special-text postparallaxe my-5">
        <div class="row">
            <div class="col">
                <p><b>Terreurs nocturnes</b> est un collectif artistique réunissant des passionnés de l’horreur sous toutes ses formes : auteurs et autrices de bandes dessinées, de nouvelles, d’illustrations et d’articles, ainsi que des graphistes, bêta-lecteurs et bêta-lectrices. Qu’ils soient professionnels ou amateurs, tous partagent un même objectif : faire vibrer, effrayer et captiver à travers des histoires sombres et fascinantes.
                    Notre engagement s’articule autour de <b>trois grandes missions : </b>
                </p>
            </div>
        </div>
    </div>



    <div class="container-fluid parallax-container">
        <div class="row">
            <div class="col p-0">
                <div class="parallax-image">
                    <!-- Illustration -->
                </div>
            </div>
        </div>
    </div>

    <div class="container special-text my-5">
        <div class="row">
            <div class="col">
                <h3 class="text-center text-uppercase fw-bold mb-5">Créer et vendre un fanzine d’histoires horrifiques</h3>
                <p> L’association a pour but la promotion et la diffusion des récits horrifiques créés par ses membres en
                    éditant et vendant un Fanzine d’histoires courtes. Ces histoires courtes sont sous la forme de BD,
                    nouvelles illustrées, de projets photo, d’illustrations et d’articles (cinéma, faits divers) sur la
                    thématique de l'horreur.</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <div class="parallax-image-2"></div>
            </div>
        </div>
    </div>

    <div class="container special-text my-5">
        <div class="row">
            <div class="col">
                <h4 class="text-center text-uppercase fw-bold mb-5">Promouvoir ses contributeurs et contributrices</h4>
                <p>Le fanzine offrira un premier espace de publication, visible du grand public et des professionnels du
                    secteur de l’édition. Le fanzine sera également prétexte à une présence en festival (de BD, de
                    nouvelles, d’illustration) permettant aux personnes y contribuant d’être en contact direct avec le
                    milieu professionnel et son public.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <div class="parallax-image-3"></div>
            </div>
        </div>
    </div>

    <div class="container special-text my-5">
        <div class="row">
            <div class="col">
                <h4 class="text-center text-uppercase fw-bold mb-5">Mutualiser les moyens, créer un réseau artistique</h4>
                <p> Bien que majoritairement amateur et amatrices dans nos domaines respectifs, le but de ce projet est de
                    mutualiser nos expériences, nos compétences, afin de créer ensemble un outil artistique qui touchera un
                    public, donnant une dimension concrète et palpable à une pratique bien trop souvent solitaire.</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite('resources/js/parallax.js')
@endpush
