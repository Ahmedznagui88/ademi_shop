<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 txt-offer2">
                <p class="txt-banner my-4">Prima spedizione del mese gratuita!</p>
            </div>
        </div>
    </div>

    
    {{--  --}}


    <div class="container-fluid d-flex">

        <aside class="">
            <h4 class="mt-5 hcat">Categorie</h4>
            <div class="col-12 col-md-6 div-aside ">
                @foreach ($categories as $category)
                    <div class="col-md-1 div-cat-aside ">
                        <a href="{{ route('ad.indexCategory', $category) }}"
                            class="a-aside">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
        </aside>
    
    
        <article class="container contCarous">
            <div class="row rowCarousel">
                <div class="col-12 col-md-8">
                    <div class="container-fluid d-flex justify-content-center carousel-1">
                        <div id="showCarousel" class="carousel">
                            @if ($ad->images)
                                <div class="carousel-inner carousss">
                                    @foreach ($ad->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{$image->getUrl(800 , 450)  }}" class="img-fluid img-carousel"
                                            alt="image">
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3 showdescrizioni">
                    <h2 class="font_title">{{ $ad->title }}</h2>
                    <p class="">{{ $ad->brand }}</p>
                    {{-- <p class="">{{ $ad->description }}</p> --}}
                    <p class="fs-2 price ">${{ $ad->price }}</p>
                    <span>{{__('ui.insertBy')}} {{ Auth::user()->name ?? __('ui.noName')}}</span>
                    {{-- <p>{{__('ui.insertBy')}} {{ $ad->created_at->translatedFormat('D d/m/y') }}</p> --}}
                    <p class="card-text">{{ $ad->created_at->diffForHumans() }}</p>
                </div>
            </div>
            
            </div>

            


             <div class="container-fluid containerShow">

                <div class="text-scopri">
                    <p class="" style="font-family: 'Cinzel', serif;">scopri altri prodotti!</p>
                </div> 
              
                 <div class="rowshow2">
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="">
                              <img src="/media/lamp7.avif" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="">
                              <img src="/media/interior.jpg" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="">
                              <img src="/media/profumo1.avif" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="">
                              <img src="/media/newpics/interior 1.avif" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                  </div>
              </div>  











           {{--  <div class="mt-5 outBack">
                
                <a href="{{ url()->previous() }}" class="text-decoration-none text-dark divarrow">{{__('ui.tornaIndietro')}}</a>
                
            </div> --}}
    
    
    
         {{--    @auth
                <div class="row my-5">
                    @foreach (Auth::user()->ads as $ad)
                        <div class="col-12 col-md-3">
                            <x-card2 :ad="$ad" />
                        </div>
                    @endforeach
                </div>
            @endauth --}}
        </article>
    </div>




</x-layout>
