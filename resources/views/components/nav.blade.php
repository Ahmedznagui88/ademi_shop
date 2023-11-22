<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a href="{{ route('homepage') }}">
            <img src="/media/logo.png" class="logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">{{ Auth::user()->name }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('ad.create') }}">Inserisci annuncio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('ad.index') }}">Annunci</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                      <form action="{{ route('logout') }}" method="POST" id="form-logout">
                        @csrf
                      </form>
                  </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
