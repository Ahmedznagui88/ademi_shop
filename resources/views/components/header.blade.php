<header class="d-flex flex-column justify-content-center mb-5 head">
  
     <article class="container-fluid position-relative article-1">
        <div class="row justify-content-center rowArt">
            <div id="box" class="col-12 col-md-8 divarticle ">
                <p class="text-1 mt-5"><strong>Ademi</strong><span class="texthome">Home</span></p>
            </div>
            <div class="col-12 col-md-4 divUnderTitle">
                <img src="./media/home2.jpg" class="img-fluid imgUnderTitle" alt="">
            </div>
        </div> 
    </article> 

                  {{-- ? categorie --}}
  <div class="container-fluid ">
    <div class="row">
        <div class=" justify-content-center mb-2">
            <div class="col-12 text-center buttoncategorie">
                <button class="btn-header my-2 toggle">Categorie</button>
            </div>
            <div class="col-12 panel categorie justify-content-center">
                @foreach ($categories as $category)
                    <button class="col-md-1 btn-header2 mx-2">
                        <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div> 


    <article class="container articleHeader">
      <div class="row article-2">
        <div class="col-12 col-md-6 d-flex justify-content-center dicCont">
          <div class=" divHead d-flex justify-content-center">
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
      </div>--}}

    </article>
</header>
