<nav class="navbar navbar-expand-lg fixed-top" @if (Route::CurrentRouteName() == 'ad.index') style="background-color: #6C5F5B" @endif>
    <div class="container-fluid ">
        <a href="{{ route('homepage') }}" class="">
            <img src="/media/ademi logo 2.png" class="logo" alt="">
        </a> 
        
        {{-- <form action="{{route('ads.search')}}" method="GET" class="d-flex" role="search">
            <input  name="searched" class="form-control me-2" type="search" placeholder="Cerca" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cerca</button>
        </form> --}}
        <button class="navbar-toggler mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="col-12 col-md-7 Divbarradiricerca mb-5">
            <form action="{{ route('ads.search') }}" method="GET" class="form-search-1 " role="search"> 
                <label for="searched" class="sr-only">Cerca Prodotto</label>
                <input name="searched" id="searched" class="input-1" type="search" placeholder={{__('ui.cercaAll')}} aria-label="Search">
            </form>
        </div>
       
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav d-flex align-items-center">
                @auth
                @if(Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn-outline-success btn-sm postion-relative btn-r" aria-current="page" href="{{ route('revisor.index') }}">{{__('ui.revisore')}}
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
                    <a class="nav-link text-light" href="{{ Route('ad.create') }}">{{__('ui.insertAnnouncements')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ Route('ad.index') }}">{{__('ui.allAnnouncements')}}</a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link text-light" href="#" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
                    <form action="{{ route('logout') }}" method="POST" id="form-logout">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{__('ui.register')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{__('ui.logIn')}}</a>
                </li>
                @endauth
            </ul>
        </div>
        <div class="d-flex mb-5 mx-4 ">
             
            <li class="nav-item mx-1">
                <x-_local lang='it' nation='it'/>
            </li>
            <li class="nav-item mx-1">
                <x-_local lang='en' nation='gb'/>
            </li>
            <li class="nav-item mx-1">
                <x-_local lang='fr' nation='fr'/>
            </li>

        </div>
    </div>
</nav>

