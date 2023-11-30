<x-layout>

    <div class="container my-5 ">
        <div class="row ">

      @forelse ($category->ads as $ad)
      <div class="my-5">

          <x-card :ad="$ad"/>
      </div>
      @empty
          <h2 class="text-center my-5">Non sono disponibili categorie per questo prodotto: <a href="{{ route('ad.create') }}" class="text-decoration-none text btn fs-4 rounded-5">aggiungi prodotto</a></h2>
      @endforelse
        </div>
    </div>
</x-layout>