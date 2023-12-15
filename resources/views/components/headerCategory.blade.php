{{-- <div class="container-fluid contCatHead1">
    <div class="row rowcategr1">
            <div class="col-12 categorie1 justify-content-center">
                @foreach ($categories as $category)
                    <div class="col-md-5 textCatBanner">
                    <a href="{{ route('ad.indexCategory', $category) }}"
                    class="textCatName">{{ $category->name }}</a>
                    </div>
                @endforeach
            </div>
    </div>
</div> --}}



<div class="container-fluid banners" style="background: url('{{ $category->path }}'); background-size: cover; background-position: center;">

    <div class="col-md-12 divBanners">
        <h2 class="textBanners">{{ $category->name }}</h2>
    </div>

</div>
    

