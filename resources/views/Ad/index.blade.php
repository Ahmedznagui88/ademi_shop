<x-layout>

    <div class="container-fluid my-5 rounded-4">
        <div class="row">

            <div class=" justify-content-center mb-2 mt-4">
                <div class="col-12 text-center buttoncategorie">
                    <button class="btn-1 my-2 toggle">Categorie</button>
                </div>
                <div class="col-12 panel categorie ms-5 justify-content-end">
                    @foreach ($categories as $category)
                        <button class="col-md-1 btn-1 mx-2">
                            <a href="{{ route('ad.indexCategory', $category) }}"
                                class="text-btn-1">{{ $category->name }}</a>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div>
                    <img src="/media/perfume.avif" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="/media/imageMe.png" alt="">
            </div>
        </div>


        <div class="row justify-content-center ">
            @forelse ($ads as $ad)
                <div class="col-7 ms-5 rounded-4">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <h2 class="text-center my-5">Non ci sono annunci aggiungine uno<a href=" {{ route('ad.create') }}"></a>
                </h2>
                <div class="d-flex justify-content-center">

                    <img src="/media/default-img.jpg" class="w-50" alt="">
                </div>
            @endforelse
        </div>

    </div>

</x-layout>
