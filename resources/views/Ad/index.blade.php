<x-layout>
    <div class="container my-5 rounded-4">
        
        <div class="row justify-content-center">
            @forelse ($ads as $ad )
                <div class="col-12 col-md-3 rounded-4 d-flex justify-content-center">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <h2 class="text-center my-5">Non ci sono immagini aggiungine una <a href=" {{ route('ad.create') }} "></a> </h2>
                <div class="d-flex justify-content-center">
                    
                    <img src="/media/default-img.jpg" class="w-50" alt="">
                </div>
            @endforelse
        </div>

    </div>
</x-layout>