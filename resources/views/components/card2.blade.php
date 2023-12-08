    <div class="out d-flex justify-content-end m-3">
        <a href="{{ route('ad.show', $ad) }}" class="text-decoration-none text-black border-none">

            <div class="card border-none card-2" style="width: 18rem;">
                <img src="{{ !$ad->images()->get()->isEmpty()? $ad->images()->first()->getUrl(300, 300): '/public/media/default-img.jpg' }}"
                    class="img-fluid card2-img ">
                <div class="rounded-4 text-center">
                    <h5 class="card-title">{{ $ad->title }}</h5>
                    <p>{{ $ad->brand }}</p>
                    {{--  <p class="card-text">{{ $ad->description }}</p> --}}
                    <p class="fs-2 price">${{ $ad->price }}</p>
                    <small>{{ $ad->category->name ?? __('ui.noSpec') }}</small>
                    <div class=" d-flex align-items-center justify-content-between d-none">
                        <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-50">{{ __('ui.mostra') }}</a>

                    </div>
                </div>
            </div>
    </div>
