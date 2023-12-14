<x-layout>

     <div class="container">
        <div class="row justify-content-between rounded-4 list">
            <div class="col-12 col-md-3 divaside">
                <div class="row">
                 
                    <div class="col-12 divImg">
                        <img class="img-fluid imgprofile" src="{{ Storage::url(Auth::user()->image) ?? './../../../public/media/default-img.jpg' }}" alt="" >
                        <a href="{{ route('profileCreate') }}">
                        <i data-visualcompletion="css-img" class="x1b0d499 xep6ejk icon" style="background-image: url(&quot;https://static.xx.fbcdn.net/rsrc.php/v3/yX/r/TNtxzgU79Ci.png&quot;); background-position: 0px -22px; background-size: 22px 192px; width: 20px; height: 20px; background-repeat: no-repeat; display: inline-block;"></i>
                    </a>
                    </div>
              
                </div>
                <div class="row mt-5">
                    <div class="col-12">
                        <h6 class="text-center ms-2 ">{{ Auth::user()->name }}</h6>
                        <p> Provincia: {{ Auth::user()->province }}</p>
                        <p>Città: {{ Auth::user()->city }}</p>
                        <p>Età: {{ Auth::user()->age }}</p>
                    </div>

                </div>
            </div>
        </div> 
        
        <div class="row justify-content-center rounded-4 list">
               
            <div class="col-12 col-md-8 ms-5">
                <livewire:ad-list />
            </div>
        </div>
          
           
 
    </div>
</x-layout>