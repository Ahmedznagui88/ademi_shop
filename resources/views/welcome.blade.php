<x-layout>
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
    <div class="d-flex justify-content-end ">

        <form action="{{ route('ads.search') }}" method="GET" class="form-search-1" role="search">
            <label for="searched" class="sr-only">Cerca prodotto</label>
            <input name="searched" id="searched" class="input-1" type="search" placeholder="Cerca prodotto" aria-label="Search">
            
        </form>
        
    </div>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row row-category ">
            <div class="col-12 col-md-1 buttoncategorie">
                <button class="btn-1 my-2 toggle">Categorie</button>
            </div>

            <div class="col-12 panel categorie">
                @foreach ($categories as $category)
                    <button class="col-md-1 btn-1 mx-2">
                        <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
                    </button>
                @endforeach
            </div>
            
            {{-- <div class="col-12 col-md-1">
                <button class="btn-1 my-2 bg-danger">Annunci</button>
            </div> --}}
        </div>
    </div>
     
    <x-header />
    <hr>
    {{-- <div class="container d-flex justify-content-center ">
        <div class="row  cardHome rounded-4">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-3 ">
                    <x-card :ad="$ad" />
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="container" style="width: 1050px">
        <div class="row  cardHome rounded-4 p-3">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-3 ">
                    <x-card :ad="$ad" />
                </div>
            @endforeach
        </div>
    
    </div>
    <hr>
    <div class="container mt-5">
        <div class="row row3">
            <div class="col-12 col-md-8 row3col-l">

            </div>
            <div class="col-12 col-md-4 row3col-r">
                <h2 class="mt-5">Inizia a vendere <br> i tuoi prodotti.</h2>
                <button class="btn mt-5">
                    <a href="{{ route('ad.create') }}">Inserisci annuncio</a>
                </button>
            </div>
        </div> <hr class="mt-5">
        
        <div class="mt-5 justify-content-center categorietonde" style="width: 1000px; margin-left: 10%">
        
            @foreach ($categories as $category)
                <div class="mx-2 slidediv">
                    <a href="{{ route('ad.indexCategory', $category) }}" class=" divCategorie slide">{{ $category->name }}</a>
                   
                </div>
             
            @endforeach
           
     
        </div>
        <div class="row">
            <input type="text" id="input">
            <p id="output"></p>
        </div>

    </div>



</x-layout>
