<x-layout>
    <div class="container my-5 rounded-4" style="width:1100px;">
        
        <div class="row justify-content-center mb-2">
            <div class="col-12 text-center buttoncategorie">
                <button class="btn-1 my-2 toggle">Categorie</button>
            </div>
            <div class="col-12 panel categorie ms-1">
                @foreach ($categories as $category)
                    <button class="col-md-1 btn-1 mx-2">
                        <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
                    </button>
                @endforeach
            </div>
        </div>
        <div class="row justify-content-center rowindex">
            <div class="col-12 col-md-6">
            </div>
        </div>
        
        <div class="row justify-content-center">
            @forelse ($ads as $ad)
                <div class="col-12 col-md-3 rounded-4">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <h2 class="text-center my-5">Non ci sono annunci aggiungine uno<a href=" {{ route('ad.create') }}"></a> </h2>
                <div class="d-flex justify-content-center">
                    
                    <img src="/media/default-img.jpg" class="w-50" alt="">
                </div>
            @endforelse
        </div>
    </div>
</x-layout>