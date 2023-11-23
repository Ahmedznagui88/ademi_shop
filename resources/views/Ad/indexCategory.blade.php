<x-layout>

    <div class="container">
        <div class="row">
      @forelse ($category->ads as $category )
      <div class="card rounded-0" style="width: 18rem;">
        <img src="{{ Storage::url($category->image) }}" class="card-img-top" alt="{{ $category->title }}">
        <div class="card-body text-center">
            <h5 class="card-title">{{ $category->title }}</h5>
            <p>{{ $category->brand }}</p>
            <p class="card-text">{{ $category->description }}</p>
            <p class="fs-2 price">${{ $category->price }}</p>
            <small>{{$category->category->name ?? 'Categoria non specificata'}}</small>
            <div class=" d-flex align-items-center justify-content-between">
                <a href="{{ route('ad.show', $ad) }}" class="btn btn-primary w-50">Mostra</a>
                <i class="fa-regular fa-heart fa-xl mx-5"></i>
            </div>
        </div>
    </div>
      @empty
          <h2>Noni ci sono categorie per questo prodotto <a href="{{ route('ad.create') }}"> aggiungine una</a></h2>
      @endforelse
        </div>
    </div>
</x-layout>