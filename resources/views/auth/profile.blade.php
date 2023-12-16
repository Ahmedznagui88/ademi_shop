<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 search-profilo d-flex justify-content-center mt-5 ">
                <form action="{{ route('ads.search') }}" method="GET" class="form-search-1" role="search">
                    <label for="searched" class="sr-only">Cerca Prodotto</label>
                    <input name="searched" id="searched" class="input-1" type="search"
                        placeholder={{ __('ui.cercaAll') }} aria-label="Search">
                </form>
            </div>
            <div class="col-12 col-md-8 logo-porta">
                <img src="./media/home2.jpg" class="img-fluid imgUnderTitle" alt="">
            </div>
        </div>
        <div class="row rounded-4 mt-5 ">
            <div class="col-12 aside-phone">
                <div class="div-upaside mb-2">
                    
                        @if (Auth::user()->image)
                            <img class="img-fluid imgprofile" src="{{ Storage::url(Auth::user()->image) }}"
                                alt="">
                        @else
                            <img class="img-fluid imgprofile"
                                src="/media/default-avatar-profile-icon-vector-social-media-user-photo-183042379.jpg"
                                alt="">
                        @endif

                        <a href="{{ route('profileCreate') }}">
                            <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk icon"
                                style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/TNtxzgU79Ci.png&quot;); background-position: 0px -22px; background-size: 22px 192px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                        </a>
                  
                </div>
            </div>
        
            <div class="col-12 col-md-1 divaside aside-phone">
                <div class="row mt-5">
                    <div class="col-12">
                        <p class="">{{__('ui.nome')}}: {{ Auth::user()->name }}</p>
                        <p>{{__('ui.province')}}: {{ Auth::user()->province }}</p>
                        <p>{{__('ui.city')}}: {{ Auth::user()->city }}</p>
                        <p>{{__('ui.age')}}: {{ Auth::user()->age }}</p>
                    </div>
                    <div class="col-12 text-bio">
                        <p>{{__('ui.bio')}}: {{ Auth::user()->bio }}</p>

                    </div>
                </div>
            </div>
            @if (Auth::user()->name)
                
            <div class="col-12 col-md-7 div-table-componente">
                <h4 class="fs-1 d-flex justify-content-center text-h4">I tuoi annunci</h4>
                <livewire:ad-list />
            </div>
            @endif
        </div>




        <div class="row justify-content-center rounded-4 list">
            <div class="col-12 col-md-8 text-center">
             
            </div>
           
        </div>


        <div class="row my-5 rowCardProfile ">
            @foreach (Auth::user()->ads as $ad)
                <div class="col-12 col-xl-6 rounded-4 d-flex justify-content-center divCardProfile">
                    <x-card :ad="$ad" />
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
