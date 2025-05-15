@extends('layouts.app')

@section('content')
    <main>

        <div class="container special-text my-5">
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-uppercase fw-bold mb-5">Contactez-nous</h2>
                    Tu souhaites plus d’informations, proposer un projet, nous donner un coup de main, ou simplement te
                    tenir au courant de nos avancées ?
                    <br>
                    Alors suis nous sur nos réseaux Instagram et facebook !
                    <br>
                    Tu peux également nous joindre par mail à l’adresse suivante : fanzineterreursnocturnes@gmail.com
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row parallax-image-contact">
                <div class="col-lg-4">
                </div>
                <div class="col-lg-8 contact-gradient">
                    <div class="row h-100 d-flex align-items-center">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                    
                                <form action="{{ route('contact.store') }}" method="POST" class="p-5 shadow-lg rounded-4">
                                    @csrf
                    
                                        <div class="col-12 mb-4">
                                            <label for="name" class="form-label" style="font-weight: bold; color: white;">Nom :</label>
                                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                                class="form-control @error('name') is-invalid @enderror p-3"
                                                style="border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;" required>
                                            @error('name')
                                                <div class="invalid-feedback" style="color: #e74c3c;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-12 mb-4">
                                            <label for="email" class="form-label" style="font-weight: bold; color: white;">Email :</label>
                                            <input type="email" id="email" name="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror p-3"
                                                style="border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;" required>
                                            @error('email')
                                                <div class="invalid-feedback" style="color: #e74c3c;">{{ $message }}</div>
                                            @enderror
                                        </div>
                    
                                    <div class="mb-4">
                                        <label for="message" class="form-label" style="font-weight: bold; color: white;">Message :</label>
                                        <textarea id="message" name="message" rows="5" class="form-control @error('message') is-invalid @enderror p-3"
                                            style="border-radius: 8px; border: 1px solid #ccc; background-color: #f8f9fa;" required>{{ old('message') }}</textarea>
                                        @error('message')
                                            <div class="invalid-feedback" style="color: #e74c3c;">{{ $message }}</div>
                                        @enderror
                                    </div>
                    
                                    <input type="text" name="address" style="display:none">
                    
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-lg"
                                            style="background-color: #white; border: none; border-radius: 30px; color: white; transition: all 0.3s ease;">
                                            Envoyer
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>
        </div>


        {{-- 
        <div class="container-fluid parallax-container">
            <div class="row">
                <div class="col p-0">
                    <div class="parallax-image-contact">
                        <!-- Illustration -->
                    </div>
                </div>
            </div>
        </div> --}}
    </main>
@endsection
