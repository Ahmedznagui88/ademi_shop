<div class="card rounded-0" style="width: 18rem;">
    <img src="{{ Storage::url($ad->image) }}" class="card-img-top" alt="{{ $ad->title }}">
    <div class="card-body text-center">
        <h5 class="card-title">{{ $ad->title }}</h5>
        <p>{{ $ad->brand }}</p>
        <p class="card-text">{{ $ad->description }}</p>
        <p class="fs-2 price">${{ $ad->price }}</p>
        <div>
            <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-75">Mostra</a>
            <i class="fa-regular fa-heart fa-xl mx-3 "></i>
        </div>
    </div>
</div>