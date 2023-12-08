<x-layout>
    <article class="container my-5">
        <div class="row justify-content-center rowCarousel border border-primary">
            <div class="col-12 col-md-8">
                <div class="container-fluid d-flex justify-content-center carousel-1 border border-danger">
                    <div id="showCarousel" class="carousel">
                        @if ($ad->images)
                            <div class="carousel-inner border border-warning ">
                                @foreach ($ad->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{$image->getUrl(300 ,300)  }}" class="img-fluid"
                                        alt="image">
                                    </div>
                                @endforeach
                            </div>
                        @endif
                        <button class="carousel-control-prev " type="button" data-bs-target="#showCarousel"
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
                <h2 class="border-bottom border-dark-subtle">{{ $ad->title }}</h2>
                <p class="mt-5">{{ $ad->brand }}</p>
                <p class="mt-5">{{ $ad->description }}</p>
                <p class="fs-2 price mt-5">${{ $ad->price }}</p>
                <span>{{__('ui.insertBy')}} {{ Auth::user()->name ?? __('ui.noName')}}</span>
                {{-- <p>{{__('ui.insertBy')}} {{ $ad->created_at->translatedFormat('D d/m/y') }}</p> --}}
                <p class="card-text">{{ $ad->created_at->diffForHumans() }}</p>
            </div>
        </div>

        <div class="mt-5">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-dark">{{__('ui.tornaIndietro')}}</a>
        </div>

        @auth
            <div class="row my-5">
                @foreach (Auth::user()->ads as $ad)
                    <div class="col-12 col-md-3">
                        <x-card2 :ad="$ad" />
                    </div>
                @endforeach
            </div>
        @endauth
    </article>




</x-layout>
