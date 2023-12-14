<header class="d-flex flex-column justify-content-center head">

{{-- ? categorie --}}
<div class="container-fluid contCatHead">
    <div class="row rowcategr">
        <div class="justify-content-center">
            {{-- <div class="col-12 text-center buttoncategorie ">
                <button class="btn-header my-2 toggle text-light rounded-3">{{ __('ui.category') }}</button>
            </div> --}}
            <div class="col-12 {{-- panel --}} categorie justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-md-1 btn-header2">
                        <a href="{{ route('ad.indexCategory', $category) }}"
                            class="text-btn-1">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



    <div class="container-fluid">
        <div class="row">
            <div class="col-12 txt-offer">
                <p id="textCarousel" class="my-4">Fino al -30% nei saldi di natale usa il codice: XMAS-ADEMI, coperte invernali e altri must di stagione!</p>
            </div>
        </div>
    </div>


    <div class="col-12 col-md-7 Divbarradiricerca d-flex justify-content-center">
        <form action="{{ route('ads.search') }}" method="GET" class="form-search-1" role="search">
            <label for="searched" class="sr-only">Cerca Prodotto</label>
            <input name="searched" id="searched" class="input-1" type="search" placeholder={{ __('ui.cercaAll') }}
                aria-label="Search">
        </form>
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
                        <h5>SALA DA PRANZO MODERNA</h5>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center dicCont">
                <div class="divHead2 d-flex justify-content-center">
                    <img src="/media/home.jpg" class="imghead" alt="">
                    <div class="textDet2 text-center">
                        <h5>SOGGIORNO</h5>
                    </div>
                </div>
            </div>
        </div>


        {{--  <div class="d-flex justify-content-center">
        <img src="/media/down-arrow.png" class="arrow" alt="">
      </div> --}}

    </article>
</header>
