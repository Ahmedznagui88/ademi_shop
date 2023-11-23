<x-layout>

    <div class="container">
        <div class="row">
      @forelse ($category->ads as $ad)
          <x-card :ad="$ad"/>
      @empty
          <h2>Noni ci sono categorie per questo prodotto <a href="{{ route('ad.create') }}"> aggiungine una</a></h2>
      @endforelse
        </div>
    </div>
</x-layout>