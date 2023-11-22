<div class="out d-flex justify-content-end">

    <div class="card rounded-0" style="width: 18rem;">
        <img src="{{ Storage::url($ad->image) }}" class="card-img-top" alt="{{ $ad->title }}">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $ad->title }}</h5>
            <p>{{ $ad->brand }}</p>
            <p class="card-text">{{ $ad->description }}</p>
            <p class="fs-2 price">${{ $ad->price }}</p>
            <div class=" d-flex align-items-center justify-content-between">
                <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-50">Mostra</a>
                <i class="fa-regular fa-heart fa-xl mx-5 "></i>
            </div>
        </div>
    </div>
</div>