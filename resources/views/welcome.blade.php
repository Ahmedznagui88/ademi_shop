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
     <div class="container d-flex flex-column justify-content-center">
        <div class="row contenitore-banner">
            <div class="col-12 col-md-3 text-center col-banner-s">
             <p class="testo-h5">{{__('ui.tuttoQui')}}</p>
            </div>
            <div class="col-12 col-md-5 col-banner-r">
                <img src="/media/perfume2.avif"
                    alt="" class="img-fluid banner " id="carosello">
            </div>
            <div class="col-12 col-md-3 text-center col-banner-l">
                <p class="testo-h5">{{__('ui.perCasa')}}</p>
            </div>
        </div>
        <div class="row row-card-home justify-content-center">
            <div class="col-12 col-md-8 text-center mb-4">
                <h4 class="text-h4 fs-1 text-center">Ultimi annunci</h4>
            </div>
            @forelse ($ads as $ad)
            <div class="col-12 col-md-6 rounded-4 d-flex justify-content-center">
                <x-card :ad="$ad" />
            </div>
        @empty
            <h2 class="text-center my-5">{{ __('ui.noAds') }}<a href=" {{ route('ad.create') }}"></a>
            </h2>
            <div class="d-flex justify-content-center">
        
                <img src="/media/empty.avif" class="w-50 rounded-5 mt-3" alt="">
            </div>
        @endforelse
        </div>
    </div> 

    <x-section />
</x-layout>
