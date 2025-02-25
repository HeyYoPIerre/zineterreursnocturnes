<!DOCTYPE html>
<html>


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zine terreurs nocturnes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ mix('/resources/css/app.css') }}" rel="stylesheet">
    @stack('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>


  <body class="d-flex flex-column min-vh-100">    
    
    @include('partials.header')
    {{--Content--}}
      @yield('content')
    {{--Content--}} 
    @include('partials.footer')
    @vite('resources/js/app.js')

  </body>


</html>