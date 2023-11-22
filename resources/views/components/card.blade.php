<div class="card" style="width: 18rem;">
    <img src="{{ Storage::url($ad->image) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Titolo: {{ $ad->title }}</h5>
        <p>Marchio: {{ $ad->brand }}</p>
        <p class="card-text">Descrizione: {{ $ad->description }}</p>
        <p>{{ $ad->price }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>