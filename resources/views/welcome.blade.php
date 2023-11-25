<x-layout>
    <div class="container">
       <div class="row row-category">
          @foreach ($categories as $category )
              <button class="col-12 col-md-4 btn-1 mx-2">
                  <a href="{{ route('ad.indexCategory', $category) }}" class="text-btn">{{ $category->name }}</a>
              </button>
          @endforeach
       </div>
    </div>
   <x-header />
<hr>
<div class="container my-5">
      
      
      <div class="row my-5 cardHome">
         @foreach ($ads as $ad )
            <div class="col-12 col-md-3">
               <x-card :ad="$ad" />
            </div>
         @endforeach
      </div>
</div>


    
</x-layout>