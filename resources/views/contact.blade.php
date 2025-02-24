@extends('layouts.app')

@section('content')
    <h2>Contactez-nous</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="message" required>{{ old('message') }}</textarea>
            @error('message')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Envoyer</button>
        <input type="text" name="address" style="display:none">
    </form>
@endsection