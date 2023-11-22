<x-layout>
    <div class="container">
        <div class="row">
            @forelse ($ads as $ad )
                <div class="col-12 col-md-3">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <h2>Non ci sono immagini aggiungine una <a href=" {{ route('ad.create') }} "></a> </h2>
            @endforelse
        </div>
    </div>
</x-layout>