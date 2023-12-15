<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h2>{{ $ad_to_check ? __('ui.newAds') : __('ui.noNewAds') }}
                </h2>
            </div>
        </div>
    </div>

    @if ($ad_to_check)


        <div class="container ">
            <div class="row">
                <div class="col-12 d-flex justify-content-center carousel-1">
                    {{-- * carousel --}}
                    <div id="showCarousel" class="carousel ">
                        @if (!$ad_to_check->images->isEmpty())
                            <div class="carousel-inner">
                                @foreach ($ad_to_check->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ $image->getUrl(800, 450) }}" class="img-fluid img-carousel" alt="">
                                    </div>
                                @endforeach
                            </div>
                            {{-- LABELS TAG IA GOOGLE --}}
                        @endif
                        <button class="carousel-control-prev " type="button" data-bs-target="#showCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('ui.precedente') }}</span>
                        </button>
                        <button class="carousel-control-next " type="button" data-bs-target="#showCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">{{ __('ui.successivo') }}</span>
                        </button>
                    </div>
                    {{-- ! end carousel --}}
                    {{-- * alert  --}}

                   <div class="row justify-content-center align-items-center mx-4 rowrevs">
                        <div class="col-md-3 borderTags">
                            <h5 class="tc-accent mt-3">Tags</h5>
                            <div class="p-2">
                                @foreach($ad_to_check->images as $image)
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{ $label }},</p>
                                    @endforeach
                                
                            </div>
                        </div> 
                        {{-- Semafori IA GOOGLE per IMMAGINI --}}
                        <div class="col-md-3 mx-5">
                            <div class="card-body borderTagsUno">
                                <h5 class="tc-accent">{{__('ui.revImage')}}</h5>
                                <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                <p>Ammiccante: <span class="{{ $image->racy }}"></span></p>
                            </div>
                        </div>
                        @endif
                         @endforeach
                    </div> 

                    {{-- ! end alert  --}}
                </div>

            </div>
        </div>

         <div class="container contInfo">
            <div class="row rowinfo">
                <div class="text-center my-2">
                    <h5 class="card-title">{{ $ad_to_check->title }}</h5>
                    <p class="card-text">{{ $ad_to_check->description }}</p>
                    <p>{{ $ad_to_check->body }}</p>
                    <p>{{ $ad_to_check->created_at }}</p>
                </div>
            </div>
            <div class="rowbtn">
               <div class="">

                   <form action="{{ route('revisor.accept.ad', ['ad' => $ad_to_check]) }}" method="POST" class="">
                       @csrf
                       @method('PATCH')
                       <button type="submit" class="btn btnRev">{{ __('ui.accept') }}</button>
                   </form>
               </div >
                

                <div class="">

                    <form action="{{ route('revisor.reject.ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btnRevR">{{ __('ui.reject') }}</button>
                    </form>
                </div>
              

            </div>
        </div>

        {{--    <div class="container d-flex justify-content-center">
            <div class="row justify-content-center">

                <div class="col-3 col-md-3">
                    <form action="{{ route('revisor.accept.ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf

                        @method('PATCH')
                        <button type="submit" class="btn btnRev mx-5">{{ __('ui.accept') }}</button>
                    </form>
                </div>

                <div class="col-3 col-md-3">
                    <form action="{{ route('revisor.reject.ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf

                        @method('PATCH')
                        <button type="submit" class="btn btnRevR mx-5">{{ __('ui.reject') }}</button>
                    </form>
                </div>

            </div>
        </div> --}}

    @endif
</x-layout>
