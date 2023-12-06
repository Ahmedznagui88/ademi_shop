<x-layout>
    {{-- !title --}}  
    
    <div id="message" class="divmes text-center">
        @if(session('access.denied'))
        <div class="alert alert-danger">
            {{session('access.denied')}}
        </div>
        @endif
        @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
        @endif
    </div> 
    
    
    <x-header />
    
    <x-section />
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
        
        {{-- ! prova--}}    
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
