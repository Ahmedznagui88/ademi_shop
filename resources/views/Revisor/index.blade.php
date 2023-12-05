<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">{{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2>{{ $ad_to_check ? 'Ecco l\'annuncio di oggi da revisionare' : 'Non ci sono annunci da revisionare' }}
                </h2>
            </div>
        </div>
    </div>

    @if ($ad_to_check)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    {{-- ? carousel --}}
                    <div class="container-fluid d-flex justify-content-center carousel-1">
                        <div id="showCarousel" class="carousel slide cs">
                            @if ($ad_to_check->images)
                                <div class="carousel-inner">
                                    @foreach ($ad_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">

                                            <img src="{{ Storage::url($image->path) }}" class="img-fluid"
                                                alt="">

                                        </div>
                                    @endforeach

                                </div>

                            @endif
                 
                            <button class="carousel-control-prev " type="button" data-bs-target="#showCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next " type="button" data-bs-target="#showCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="border w-25 text-center rounded-3 mt-4">
                    <h5 class="card-title">{{ $ad_to_check->title }}</h5>
                    <p>{{ $ad_to_check->body }}</p>
                    <p>{{ $ad_to_check->created_at }}</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6">
                    <form action="{{ route('revisor.accept.ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf

                        @method('PATCH')
                        <button type="submit" class="btn-1 w-25">Accetta</button>
                    </form>
                </div>

                <div class="col-12 col-md-6">
                    <form action="{{ route('revisor.reject.ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf

                        @method('PATCH')
                        <button type="submit" class="btn-1 w-25">Rifiuta</button>
                    </form>
                </div>

            </div>
        </div>

    @endif
</x-layout>
