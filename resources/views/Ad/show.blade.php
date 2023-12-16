<x-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 txt-offer2">
                <p class="txt-banner">Uno stile che parla il linguaggio dell'eleganza contemporanea</p>
            </div>
        </div>
    </div>

    
    {{--  --}}


    <div class="container-fluid d-flex">

        <aside class="">
            <h4 class="mt-5 hcat">{{__('ui.category')}}</h4>
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
                                <span class="visually-hidden">{{__('ui.precedente')}}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{__('ui.successivo')}}</span>
                            </button>
                        </div>
                        
                    </div>
                </div>
                <div class="col-12 col-md-3 showdescrizioni">
                    <h2 class="font_title">{{ $ad->title }}</h2>
                    <p class="">{{ $ad->brand }}</p>
                    <p class="">{{ $ad->description }}</p>
                    <p class="fs-2 price ">${{ $ad->price }}</p>
                    <span>{{__('ui.insertBy')}} {{ Auth::user()->name ?? __('ui.noName')}}</span>
                    {{-- <p>{{__('ui.insertBy')}} {{ $ad->created_at->translatedFormat('D d/m/y') }}</p> --}}
                    <p class="card-text">{{ $ad->created_at->diffForHumans() }}</p>
                </div>
            </div>
            
            </div>

             <div class="container-fluid containerShow">

                <div class="text-scopri">
                    <p class="" style="font-family: 'Cinzel', serif;">{{__('ui.textShow')}}</p>
                </div> 
              
                 <div class="rowshow2">
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="http://127.0.0.1:8000/ad/index6">
                              <img src="/media/lamp7.avif" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="http://127.0.0.1:8000/ad/index5">
                              <img src="/media/interior.jpg" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="http://127.0.0.1:8000/ad/index4">
                              <img src="/media/profumo1.avif" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                      <div class="col-12 col-md-3 divImgShow">
                          <a href="http://127.0.0.1:8000/ad/index8">
                              <img src="/media/abstract.jpg" class="img-fluid ImgShow" alt="image">
                          </a>
                      </div>
                  </div>
              </div>  

              <div class="mt-5 outBack">
                  
                  <a href="{{ url()->previous() }}" class="text-decoration-none text-dark divarrow">{{__('ui.tornaIndietro')}}</a>
                  
              </div> 
      
          </article>
      </div>
  </x-layout>










