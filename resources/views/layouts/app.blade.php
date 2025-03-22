<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="zineterreursnocturne">
    <meta http-equiv="Cache-control" content="public">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ZineTerreursNocturnes</title>

    @vite(['resources/sass/app.scss'])
    @stack('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

    <body class="d-flex flex-column min-vh-100 @yield('body_class')">
        @include('partials.header')

        <div class="d-flex flex-column flex-grow-1">
            @yield('content')
        </div>

        @include('partials.footer')

        @vite(['resources/js/app.js'])
        @stack('scripts')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
