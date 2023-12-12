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

       
       
        <div class="collapse navbar-collapse justify-content-end text-end" id="navbarNav">
            <ul class="navbar-nav">
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

                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ Route('ad.create') }}">{{__('ui.insertAnnouncements')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ Route('ad.index') }}">{{__('ui.allAnnouncements')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light " aria-current="page" href="#">{{ Auth::user()->name }}</a>
                </li>
                <li class="nav-item">
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

            <div class="d-flex justify-content-end">

                <ul class="navbar-nav">
                 
                    <li class="nav-item">
                        <x-_local lang='it' nation='it'/>
                    </li>
                    <li class="nav-item">
                        <x-_local lang='en' nation='gb'/>
                    </li>
                    <li class="nav-item">
                        <x-_local lang='fr' nation='fr'/>
                    </li>
        
                </ul>
           
            </div>
        </div>
        
    </div>
</nav>

