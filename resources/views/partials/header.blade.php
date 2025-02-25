<nav class="navbar navbar-expand-lg sticky-top" id="header">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/logoBW.png') }}" alt="Logo" height="40">
        </a>
        <ul class="navbar-nav flex-grow-1 justify-content-center pe-3 text-uppercase fw-bold fs-4">
        <li class="nav-item d-flex">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
          <a class="nav-link" href="{{ route('artistes') }}">Artistes</a>
          <a class="nav-link" href="{{ route('participer') }}">Participer</a>
          <a class="nav-link" href="{{ route('contact.create') }}">Contactez-nous</a>
        </li>
        
        @auth
          <li class="nav-item d-flex justify-content-end">
            <a class="nav-link" href="{{ route('dashboard.index') }}">dashboard</a> <!-- Lien vers une page d'administration -->
          </li>
        @endauth
        
      </ul>
    </div>
  </nav>