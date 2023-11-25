<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a href="{{ route('homepage') }}" class="">
            <img src="/media/ademi logo.png" class="logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNav">
            <ul class="navbar-nav d-flex align-items-center">
                @auth
                    <li class="nav-item ">
                        <a class="nav-link " aria-current="page" href="">{{ Auth::user()->name }}</a>
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
                    <li class="nav-item d-flex align-items-center">
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



{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a href="{{ route('homepage') }}" class="">
            <img src="/media/logo.png" class="logo" alt="">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
</nav> --}}