<x-layout>
{{-- !title --}}  

{{-- ? categorie --}}
   {{-- <div class="container-fluid mt-4 ">
        <div class="row">
            <div class=" justify-content-center mb-2">
                <div class="col-12 text-center buttoncategorie">
                    <button class="btn-1 my-2 toggle">Categorie</button>
                </div>
                <div class="col-12 panel categorie ms-5 justify-content-end">
                    @foreach ($categories as $category)
                        <button class="col-md-1 btn-1 mx-2">
                            <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
    </div> --}}
             
             
    @if(session('access.denied'))
    <div class="alert alert-danger">
        {{session('access.denied')}}
    </div>
    @endif
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
 
    <x-header />
    <x-section />

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
