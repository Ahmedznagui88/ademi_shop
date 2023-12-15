<x-layout>

    <div class="container">
        <div class="row justify-content-between rounded-4 list">
            <div class="col-12 col-md-7 Divbarradiricerca d-flex justify-content-center">
                <form action="{{ route('ads.search') }}" method="GET" class="form-search-1" role="search">
                    <label for="searched" class="sr-only">Cerca Prodotto</label>
                    <input name="searched" id="searched" class="input-1" type="search" placeholder={{ __('ui.cercaAll') }}
                        aria-label="Search">
                </form>
            </div>
            <div class="col-12 col-md-3 divaside">
                <div class="row">

                    <div class="col-12 col-md-4 divImg">
                        <img class="img-fluid imgprofile"
                            src="{{ Storage::url(Auth::user()->image) ?? './../../../public/media/default-img.jpg' }}"
                            alt="">
                        <a href="{{ route('profileCreate') }}">
                            <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk icon"
                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/TNtxzgU79Ci.png&quot;); background-position: 0px -22px; background-size: 22px 192px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </a>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="">Nome: {{ Auth::user()->name }}</p>
                        <p> Provincia: {{ Auth::user()->province }}</p>
                        <p>Città: {{ Auth::user()->city }}</p>
                        <p>Età: {{ Auth::user()->age }}</p>
                    </div>
                    <div class="col-12 text-bio">
                        <p>Biografia: {{ Auth::user()->bio }}</p>

                    </div>
                    
          
         
                </div>
            </div>
        </div>

        <div class="row justify-content-center rounded-4 list">

            <div class="col-12 col-md-8 ms-5">
                <livewire:ad-list />
            </div>
        </div>

        
        <div class="row my-5 rowCardProfile ">
            @foreach (Auth::user()->ads as $ad)
                <div class="col-12 divCardProfile">
                    <x-card :ad="$ad" />
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
