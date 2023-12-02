<x-layout>

    <div class="container-fluid my-5 rounded-4">
        <div class="row justify-content-evenly position-relative">
            <div class="col-10 text-center">
                <p {{-- id="ademi"  --}}class="text-1 texthead mt-5"><strong class="Ademi">Ademi</strong><span class="texthome Essences">Essences</span></p>
            </div>
            <div class="col-2 DivimgRtext">
                <img src="/media/home2.jpg" class="img-fluid imgRtext" alt="">
            </div>
        </div> 
        <div class="row">
            
            <div class=" justify-content-center mb-2 mt-4">
                <div class="col-12 text-center buttoncategorie">
                    <button class="btn-index my-2 toggle">Categorie</button>
                </div>
                <div class="col-12 panel categorie ms-5 justify-content-end">
                    @foreach ($categories as $category)
                        <button class="col-md-1 btn-index2 mx-2">
                            <a href="{{ route('ad.indexCategory', $category) }}"
                                class="text-btn-2">{{ $category->name }}</a>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mb-5 position-relative">
            <div class="col-12 col-md-6 d-flex justify-content-center colhead-l" style="">
                <div class="Div-img-header-index-l ">
                    <img src="/media/perfume.avif" class="img-fluid  " alt="">
                </div>
                <div class="divhead-center">
                    <h5 class="text-center ">Per la casa, per i tuoi luoghi preferiti!</h5>
                </div>
            </div>
            <div class="col-12 col-md-6 colhead-r">
                <div class="Div-img-header-index-r">
                    <img src="/media/imageMe.png" class="img-fluid pt-5" alt="">
                </div>

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
