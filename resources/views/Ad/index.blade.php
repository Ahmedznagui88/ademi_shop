<x-layout>

    <div class="container-fluid my-5 rounded-4">
        <div class="row justify-content-center position-relative ">
            <div class="col-12 col-md-8 ">
                <p {{-- id="ademi" --}} class="text-1 texthead mt-5"><strong class="Ademi">Ademi</strong><span>Essences</span></p>
            </div>
            <div class="col-12 col-md-4 divUnderTitle DivimgRtext">
                <img src="/media/home2.jpg" class="img-fluid imgUnderTitle imgRtext" alt="">
            </div>
        </div> 

        <div class="container mt-5">

            <div class="row mb-5 position-relative">
                <div class="col-12 col-md-6 d-flex justify-content-center colhead-l" style="">
                    <div class="Div-img-header-index-l ">
                        <img src="/media/perfume.avif" class="img-fluid  " alt="">
                    </div>
                   {{--   <div class="divhead-center">
                        <h5 class="text-center ">Per la casa, per i tuoi luoghi preferiti!</h5>
                    </div>--}}
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center colhead-r">
                    <div class="Div-img-header-index-r">
                        <img src="/media/imageMe.png" class="img-fluid pt-5" alt="">
                    </div>
    
                </div>
            </div>
            <div class="row justify-content-center rowtext">
                <div class="divhead-center2">
                    <h5 class="text-center ">Per la casa, per i tuoi luoghi preferiti!</h5>
                </div>
            </div>
        </div> <hr class="container">
        {{-- Categorie --}}
        <div class="row">
            <div class=" justify-content-center mb-2 mt-4">
                <div class="col-12 text-center buttoncategorie">
                    <button class="btn-index my-2 toggle">{{__('ui.category')}}</button>
                </div>
                <div class="col-12 panel categorie justify-content-center">
                    @foreach ($categories as $category)
                        <button class="col-md-1 btn-index2 mx-2">
                            <a href="{{ route('ad.indexCategory', $category) }}"
                                class="text-btn-2">{{ $category->name }}</a>
                        </button>
                    @endforeach
                </div>
            </div>
        </div>
            
        <div class="row justify-content-center mt-5">
            <div class="mb-5">
                <h4 class="text-center tutti-gli-annunci">Tutti gli annunci</h4>
            </div>
            {{-- <div class="col-2 vh-100 colonna-l" id="colonnal">

            </div>  --}}
            @forelse ($ads as $ad)
                <div class="col-12 rounded-4 d-flex justify-content-center">
                    <x-card :ad="$ad" />
                </div>
            @empty
                <h2 class="text-center my-5">{{__('ui.noAds')}}<a href=" {{ route('ad.create') }}"></a>
                </h2>
                <div class="d-flex justify-content-center">

                    <img src="/media/empty.avif" class="w-50 rounded-5 mt-3" alt="">
                </div>
            @endforelse
            {{-- <div class="col-2 vh-100 colonna-r" id="colonnar">

            </div>  --}}
        </div>

    </div>

</x-layout>
