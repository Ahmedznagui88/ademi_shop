<x-layout>
    <article class="container-fluid my-5">
        <div class="row shadow pt-5">
            <div class="col-12 col-md-8">
                {{-- <img src="{{ Storage::url($ad->image) }}" alt=""> --}}
                {{--  <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid w-50" alt=""> --}}

                <div id="carouselExample" class="carousel slide cs">
                    <div class="carousel-inner mx-5">
                        <div class="carousel-item active cs">
                            <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid " alt="...">
                        </div>
                        <div class="carousel-item active cs">
                            <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="...">
                        </div>
                        <div class="carousel-item active cs">
                            <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                class="img-fluid" alt="...">
                        </div>

                    </div>
                    <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#carouselExample"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-3 d-flex flex-column align-item-center showdescrizioni">
                <h2>{{ $ad->title }}</h2>
                <p class="mt-5">{{ $ad->brand }}</p>
                <p class="mt-5">{{ $ad->description }}</p>
                <p class="fs-2 price mt-5">${{ $ad->price }}</p>
                <span>{{__('ui.InsertBy')}} {{ Auth::user()->name ?? __('ui.noName')}}</span>
                <p>{{__('ui.insertBy')}} {{ $ad->created_at->translatedFormat('D d/m/y') }}</p>
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
