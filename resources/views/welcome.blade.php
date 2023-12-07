<x-layout>
    {{-- !title --}}

    <div id="message" class="divmes text-center">
        @if (session('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
        @endif
        @if (session('message'))
            <div class="alert alert-success ">
                {{ session('message') }}
            </div>
        @endif
    </div>


    <x-header />

    <x-section />

    {{-- Carosello 2 --}}
    <div class="container contenitore-banner">
        <div class="row banner" style="align-items: center">
            <div class="col-12 col-md-6 text-center col-banner-l">
             <h5 class="testo-h5">Tutto quello che cerchi è qui!</h5>
            </div>
            <div class="col-12 col-md-6 col-banner-r">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFeXR0CA6b0dmc5sRXZO6HW7WdLHJCfPJF9A&usqp=CAU"
                    alt="" class="img-fluid banner" id="carosello">
            </div>

        </div>
    </div>
        {{-- Carosello 
        <div class="container container-banner">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-8 banner mt-5 col-banner" id="banner">
                    <div class="carousel">
                        <div class="slide">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdkvMJDPvL5lBtmrViEL-7mJ1Ii_yznEdpvpRPxl6_bOkOY-hf67sNewOvEeKm3e1yqp0&usqp=CAU" alt="" class="img-fluid banner">
                        </div>
                        <div class="slide">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScYEwVKC05E5Cx5ZZS55PBmskQ2Ocfb4HKFg&usqp=CAU" alt="" class="img-fluid banner">
                        </div>
                        <div class="slide">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR59saMRzhRJgD3720JEtAr3j03yRU701kHcA&usqp=CAU" alt="" class="img-fluid banner">
                        </div>
                        <div class="slide">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFeXR0CA6b0dmc5sRXZO6HW7WdLHJCfPJF9A&usqp=CAU" alt="" class="img-fluid banner">
                        </div>
                      </div>
                </div>
            </div>
        </div> --}}
    {{--  <div class="container">
        <div class="row">
            <div class="col-12 col-md-8">
                
                <section class="splide "  data-splide='{"type":"loop","perPage":3}'>
                    <div class="splide__slider">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide" data-splide-interval="1000">Slide 01</li>
                                <li class="splide__slide" data-splide-interval="1000">Slide 02</li>
                                <li class="splide__slide" data-splide-interval="1000">Slide 03</li>
                                <li class="splide__slide" data-splide-interval="1000">Slide 01</li>
                                <li class="splide__slide" data-splide-interval="1000">Slide 02</li>
                                <li class="splide__slide" data-splide-interval="1000">Slide 03</li>
                            </ul>
                        </div>
                    </div>
                    
                    
                    <button class="splide__toggle" type="button">
                        <span class="splide__toggle__play">Play</span>
                        <span class="splide__toggle__pause">Pause</span>
                    </button>
                </section>
            </div>
            
        </div>
    </div> --}}

    {{-- <div class="container">
        <div class="row cardHome">
            @foreach ($ads as $ad)
            <div class="col-12 col-md-3">
                <x-card2 :ad="$ad" />
            </div>    
            @endforeach
        </div>
    </div> --}}

    {{--  <div class="container mt-5">
        
        {{-- ! prova --}}
    {{--  <div class="row row3">
            <div class="col-12 col-md-8 row3col-l">
                
            </div>
            <div class="col-12 col-md-4 row3col-r">
                <h2 class="mt-5">Inizia a vendere <br> i tuoi prodotti.</h2>
                <button class="btn mt-5">
                    <a href="{{ route('ad.create') }}">Inserisci annuncio</a>
                </button>
            </div>
        </div> <hr class="mt-5"> --}}

    {{--  <div class="mt-5 justify-content-center categorietonde" style="width: 1000px; margin-left: 10%">
            @foreach ($categories as $category)
            <div class="mx-2 slidediv">
                <a href="{{ route('ad.indexCategory', $category) }}" class=" divCategorie slide">{{ $category->name }}</a>
            </div>
            @endforeach
        </div> --}}
    </div>

</x-layout>
