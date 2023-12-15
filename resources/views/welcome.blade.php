<x-layout>
    {{-- !title --}}

    <div  id="message" class="divmes text-center">
          @if  (session('access.denied'))
            <div class="alert alert-danger">
                {{ session('access.denied') }}
            </div>
         @endif 
    @if(session('message'))
            <div class="divmes alert alert-success">
                {{ session('message') }}
            </div>
       @endif
    </div>

    
    <x-header />

    
       
    {{-- Carosello 2 --}}
     <div class="container contenitore-banner">
        <div class="row banner">
            <div class="col-12 col-md-3 text-center col-banner-s">
             <p class="testo-h5">Tutto quello che cerchi è qui!</p>
            </div>
            <div class="col-12 col-md-5 col-banner-r">
                <img src="/media/perfume2.avif"
                    alt="" class="img-fluid banner " id="carosello">
            </div>
            <div class="col-12 col-md-3 text-center col-banner-l">
                <p class="testo-h5">Per la casa e per i tuoi luoghi preferiti!</p>
            </div>
        </div>
    </div> 

    <x-section />
</x-layout>
