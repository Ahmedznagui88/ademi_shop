<x-layout>

    <div class="container my-5">
        <div class="row ">
      @forelse ($category->ads as $ad)
          <x-card :ad="$ad"/>
      @empty
          <h2 class="text-center my-5">Non sono disponibili categorie per questo prodotto: <a href="{{ route('login') }}" class="text-decoration-none text btn fs-4 rounded-5">aggiungi prodotto</a></h2>
      @endforelse
        </div>
    </div>
</x-layout>