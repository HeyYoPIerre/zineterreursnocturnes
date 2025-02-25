<nav class="navbar navbar-expand-lg sticky-top" id="header">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('images/logoBW.png') }}" alt="Logo" height="40">
      </a>
      
      <button class="navbar-toggler" id="menu-toggle" type="button" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <ul class="navbar-nav" id="menu-items">
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
</nav>