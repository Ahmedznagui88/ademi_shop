<x-layout>
    <div class="container-fluid d-flex justify-content-center">
        {{--  <div class="row row-category">
            @foreach ($categories as $category)
                <button class="col-md-5 btn-1 mx-2">
                    <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
                </button>
            @endforeach
        </div> --}}

        <div class="row row-category">
            <div class="col-12 col-md-1 buttoncategorie">
                <button class="btn-1 my-2 toggle">Categorie</button>
            </div>

            <div class="col-12 panel categorie ms-1">
                @foreach ($categories as $category)
                    <button class="col-md-1 btn-1 mx-2">
                        <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn-1">{{ $category->name }}</a>
                    </button>
                @endforeach
            </div>
            <div class="col-12 col-md-1">
                <button class="btn-1 my-2 bg-danger">Annunci</button>
            </div>
        </div>
    </div>
    <x-header />
    {{-- <div class="container d-flex justify-content-center ">
        <div class="row  cardHome rounded-4">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-3 ">
                    <x-card :ad="$ad" />
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="container d-flex justify-content-center" style="width: 1050px">
        <div class="row  cardHome rounded-4 p-3">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-3 ">
                    <x-card :ad="$ad" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
