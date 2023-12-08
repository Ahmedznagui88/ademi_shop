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


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 ">
                    {{-- ? carousel --}}
                    <div class="container-fluid d-flex justify-content-center carousel-1">
                        <div id="showCarousel" class="carousel ">
                            @if (!$ad_to_check->images->isEmpty())
                                <div class="carousel-inner">
                                    @foreach ($ad_to_check->images as $image)
                                        <div class="carousel-item @if ($loop->first) active @endif">
                                            <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid" alt="">

                                        </div>
                                            
                                    @endforeach
                                    
                                </div>
{{-- LABELS TAG IA GOOGLE --}}

                            @else
                                <div class="carousel-inner mx-5">
                                    <div class="carousel-item active cs">
                                        <img src="https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fGludGVybiUyMGhvbWV8ZW58MHx8MHx8fDA%3D"
                                            class="img-fluid rounded-4 " alt="...">
                                    </div>
                                    <div class="carousel-item active cs">
                                        <img src="https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8d2F0Y2h8ZW58MHx8MHx8fDA%3D"
                                            class="img-fluid rounded-4" alt="...">
                                    </div>
                                    <div class="carousel-item active cs">
                                        <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8cGVyZnVtZXxlbnwwfHwwfHx8MA%3D%3D"
                                            class="img-fluid rounded-4" alt="...">
                                    </div>
                                </div>
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
                        <div class="col-md-3 border-end">
                            <h5 class="tc-accent mt-3">Tags</h5>
                            <div class="p-2">
                                @if ($image->labels)
                                    @foreach ($image->labels as $label)
                                        <p class="d-inline">{{ $label }},</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
{{-- Semafori IA GOOGLE per IMMAGINI --}}

                        <div class="col-md-3">
                            <div class="card-body">
                                <h5 class="tc-accent">Revisione Immagini</h5>
                                <p>Adulti:<span class="(($image->adult})"></span></p>
                                <p>Satira:<span class="(($image->spoof})"></span></p>
                                <p>Medicina:<span class="(($image->medical})"></span></p>
                                <p>Violenza:<span class="(($image->violence})"></span></p>
                                <p>Ammiccante:<span class="(($image->racy})"></span></p>
                            </div>
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
                        <button type="submit" class="btn-1 w-25">{{ __('ui.accept') }}</button>
                    </form>
                </div>

                <div class="col-12 col-md-6">
                    <form action="{{ route('revisor.reject.ad', ['ad' => $ad_to_check]) }}" method="POST">
                        @csrf

                        @method('PATCH')
                        <button type="submit" class="btn-1 w-25">{{ __('ui.reject') }}</button>
                    </form>
                </div>

            </div>
        </div>

    @endif
</x-layout>
                                        

                                      
