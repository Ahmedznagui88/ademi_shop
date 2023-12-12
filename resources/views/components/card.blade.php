    {{-- <div class="out d-flex justify-content-end m-3">
    <a href="{{ route('ad.show', $ad) }}" class="text-decoration-none text-black ">

{-- <div class="card border-none rounded-4" style="width: 18rem;">
       <img src="{{ Storage::url($ad->image) }}" class="card-img-top " alt="{{ $ad->title }}">
            <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                class="img-fluid border-none rounded-4" alt="">
            <div class="card-body text-center rounded-4">
                <h5 class="card-title">{{ $ad->title }}</h5>
                <p>{{ $ad->brand }}</p>
                <p class="card-text">{{ $ad->description }}</p>
                <p class="fs-2 price">${{ $ad->price }}</p>
                <small>{{ $ad->category->name ?? 'Categoria non specificata' }}</small>
                <div class=" d-flex align-items-center justify-content-between">
                    <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-50">Mostra</a>
                    <i class="fa-regular fa-heart fa-xl mx-5"></i>
                </div>
            </div>
        </div>
</div> --}}

    {{-- Prova card --}}

    {{-- <figure>
  <img src="https://images.unsplash.com/photo-1700587085844-b96c27958df2?q=80&w=2080&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
  class="img-fluid" style="height: 300px" alt="">
  <figcaption class="">
    <h5 class="card-title">{{ $ad->title }}</h5>
    <p>{{ $ad->brand }}</p>
    <p class="card-text">{{Str::limit( $ad->description, '20') }}</p>
    <p class="fs-2 price">${{ $ad->price }}</p>
    <small>{{ $ad->category->name ?? 'Categoria non specificata' }}</small>
    <div class=" d-flex align-items-center justify-content-between">
        <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary ">Mostra</a>
        <i class="fa-regular fa-heart fa-xl mx-5"></i>
    </div>
  </figcaption>
</figure> --}}
    {{-- Card orizzontale --}}

    <a href="{{ route('ad.show', $ad) }}" class="decoration-none">

        <div class="card mb-3 card2">
            <div class="row g-0">
                <div class="col-md-5 imgC">
                    <img src="{{ !$ad->images()->get()->isEmpty()? $ad->images()->first()->getUrl(800, 450): '/public/media/default-img.jpg' }}"
                        class="img-fluid card-img">
                </div>
                <div class="col-md-7 mx-5">
                    <div class="card-body d-flex justify-content-between">

                        <div class=" my-2">
                            <div>

                                <h5 class="card-title ">{{ Str::limit($ad->title , '12') }}</h5>
                            </div>
                            <div class="d-md-flex justify-content-between">

                                <p class="">{{ Str::limit($ad->brand , '12') }}</p>
                                <p class="fs-2 price mx-md-5">${{ $ad->price }}</p>

                            </div>
                            <div class="d-flex justify-content-between">

                                <small class="">{{ $ad->category->name ?? __('ui.noSpec') }}</small>
                            </div>
                        </div>

                        <div class="icon-d">
                            {{-- <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-50">Mostra</a> --}}
                            <i class="fa-regular fa-heart fa-xl"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>

 
