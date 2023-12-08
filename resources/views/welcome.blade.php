<x-layout>
    {{-- !title --}}

    <div id="message" class="divmes text-center">
        @if (session('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
        @endif
        @if (session('message'))
            <div class="divmes alert alert-success">
                {{ session('message') }}
            </div>
         @endif
    </div>
    <x-header />

       
    {{-- Carosello 2 --}}
     <div class="container-fluid contenitore-banner">
        <div class="row banner">
            <div class="col-12 col-md-3 text-center col-banner-s">
             <h5 class="testo-h5 text-5">Tutto quello che cerchi è qui!</h5>
            </div>
            <div class="col-12 col-md-5 col-banner-r">
                <img src="/media/perfume2.avif"
                    alt="" class="img-fluid banner" id="carosello">
            </div>
            <div class="col-12 col-md-3 text-center col-banner-l">
                <h5 class="testo-h5">Per la casa per i tuoi luoghi preferiti!</h5>
               </div>
        </div>
    </div> 

    
</x-layout>
