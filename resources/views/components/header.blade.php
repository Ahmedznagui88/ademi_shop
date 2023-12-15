<header class="d-flex flex-column justify-content-center {{-- head --}}">

{{-- ! categorie active from 300px to 1000px--}}
    <div class="container-fluid {{-- contCatHead --}}">
        <div class="row rowcategr">
                <div class="col-12 categorie justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col-md-5 btn-header2">
                        <a href="{{ route('ad.indexCategory', $category) }}"
                        class="text-btn-1">{{ $category->name }}</a>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

    <div class="container-fluid container-text-offer">
        <div class="row">
            <div class="col-12 txt-offer">
                <p id="textCarousel" class="my-3">Fino al -30% nei saldi di natale usa il codice: XMAS-ADEMI, coperte invernali e altri must di stagione!</p>
            </div>
        </div>
    </div>

{{--! search => css search   --}}
    <div class="col-12 col-md-7 Divbarradiricerca d-flex justify-content-center">
        <form action="{{ route('ads.search') }}" method="GET" class="form-search-1" role="search">
            <label for="searched" class="sr-only">Cerca Prodotto</label>
            <input name="searched" id="searched" class="input-1" type="search" placeholder={{ __('ui.cercaAll') }}
                aria-label="Search">
        </form>
    </div>
{{--! end search => css search   --}}

<div class="container-fluid divButtonCategories my-4">
    <div class="row">
        <div class="justify-content-center">
             <div class="col-12 text-center buttoncategorie">
                <button class="btn-header my-2 toggle text-light">{{ __('ui.category') }}</button>
            </div> 
            <div class="col-12 panel categorie justify-content-center mb-2">
                @foreach ($categories as $category)
                    <button class="col-md-1 btn-header2 mx-2">
                        <a href="{{ route('ad.indexCategory', $category) }}"
                            class="text-btn-1">{{ $category->name }}</a>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div>

    <article class="container-fluid position-relative article-1">
        <div class="row justify-content-center rowArt">
            <div class="col-12 col-md-8 divarticle">
                <p class="text-1 mt-5"><strong>Ademi</strong><span class="texthome">Home</span></p>
            </div>
            <div class="col-12 col-md-4 divUnderTitle">
                <img src="./media/home2.jpg" class="img-fluid imgUnderTitle" alt="">
            </div>
        </div>
    </article>

    


    <article class="container articleHeader">
        <div class="row article-2">
            <div class="col-12 col-md-6 d-flex justify-content-center dicCont">
                <div class="divHead d-flex justify-content-center">
                    <img src="/media/home1.jpg" class="img-fluid" alt="">
                    <div class="textDet text-center">
                        <h5>ELEGANZA MODERNA PER IL TUO DINING</h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center dicCont">
                <div class="divHead2 d-flex justify-content-center">
                    <img src="/media/home.jpg" class="imghead" alt="">
                    <div class="textDet2 text-center">
                        <h5>STILE SENZA CONFINE NEL TUO SOGGIORNO</h5>
                    </div>
                </div>
            </div>
        </div>

    </article>
</header>
