<nav class="navbar navbar-expand-lg bg-light sticky-top" id="header">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logoBW.png') }}" alt="Logo" height="40">
      </a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('artistes') }}">Artistes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('participer') }}">Participer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact.create') }}">Contactez-nous</a>
          </li>

          @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
</nav>
