<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a href="{{ route('homepage') }}" class="">
            <img src="/media/ademi logo 2.png" class="logo" alt="">
        </a>
        {{-- <form action="{{route('ads.search')}}" method="GET" class="d-flex" role="search">
            <input  name="searched" class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        
       
        <div class="collapse navbar-collapse d-flex justify-content-end " id="navbarNav">

            <ul class="navbar-nav d-flex align-items-center">
                @auth
                @if(Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn-outline-success btn-sm postion-relative btn-r" aria-current="page" href="{{ route('revisor.index') }}">Revisore
                        <span class="badge rounded-pill bg-danger mx-2">
                            {{ App\Models\Ad::toBeRevisionedCount() }}
                            <span class="visually-hidden">Unread messages</span>
                        </span>
                    </a>
                </li>
                @endif
                <li class="nav-item ">
                    <a class="nav-link text-light " aria-current="page" href="">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ Route('ad.create') }}">Inserisci annuncio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ Route('ad.index') }}">Annunci</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link text-light" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
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